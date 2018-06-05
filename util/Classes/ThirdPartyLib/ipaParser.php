<?php
/**
 * 解析Ipa plist文件
 *
 * @author zhoushen extrembravo@gmail.com
 * @since  2014/2/14
 */
require_once ('CFPropertyList/CFPropertyList.php');
class ipaParser{
    const INFO_PLIST = 'Info.plist';
    public function parse($ipaFile, $infoFile=self::INFO_PLIST){
        $zipObj = new ZipArchive;
        if($zipObj->open($ipaFile) !== true){
            throw new PListException("unable to open {$ipaFile} file!");
        }
        //scan plist file
        $plistFile = null;

        $iconName = null;
        for ($i=0; $i < $zipObj->numFiles; $i++) {
            $name = $zipObj->getNameIndex($i);

            if (preg_match('/Payload\/(.+)?\.app\/' . 'AppIcon(.+)@2x.png' . '$/i', $name)){
                $iconName=$name;
            }
            if(preg_match('/Payload\/(.+)?\.app\/' . preg_quote($infoFile) . '$/i', $name)){
                $plistFile = $name;
                break;
            }
        }
        //parse plist file
        if(!$plistFile){
            throw new PListException("unable to parse plist file！");
        }
        //deal in memory
        $plistHandle = fopen('php://memory', 'wb');
        fwrite( $plistHandle, $zipObj->getFromName($plistFile) );
        rewind($plistHandle);

        $iconHandle=fopen('php://memory','wb');
        fwrite($iconHandle, $zipObj->getFromName($iconName));
        rewind($iconHandle);



        $zipObj->close();

        ini_set("display_errors", "On");
        error_reporting(E_ALL | E_STRICT);
        $plist = new CFPropertyList($plistHandle);
        $this->plistContent = $plist->toArray();
        $this->icon = $iconHandle;

        return true;
    }
    //获取包名
    public function getPackage(){
        return $this->plistContent['CFBundleIdentifier'];
    }
    //获取版本
    public function getVersion(){
        return $this->plistContent['CFBundleVersion'];
    }
    //获取应用名称
    public function getAppName(){
        return $this->plistContent['CFBundleDisplayName'];
    }
    //获取应用分类
    public function getCategory(){
        return $this->plistContent['LSApplicationCategoryType'];
    }
    //获取解析后的plist文件
    public function getPlist(){
        return $this->plistContent;
    }
    //获取解析后的icon文件
    public function getIcon(){
        return $this->icon;
    }
}
    $(document).ready(function() {

    $.validator.addMethod("checkShortcut",function(value,element){
//        var regex = /^[A-Za-z]*[a-z0-9_]$/ ;
        var regex = /^\w{4,}$/ ;
        var ret = regex.test(value);

        if (!ret) {
            return false;
        } else {
            return true;
        }
    },shortcutError);

    jQuery.validator.addMethod("check", function() {
        return $("#mAKey").val()!="" || $("#shortcut").val()!="";
    }, "请选择App或输入短链接");

        $("#selForm").validate({
            rules: {
                shortcut: {
                    minlength: 4,
//                    checkShortcut: true,
                    check: true,
                },
                mAKey : {
                    check: true,
                }

           },

            messages: {
                shortcut: {
                    minlength: shortcutMin,
//                    checkShortcut: shortcutError,
                    check: shortcutCheck,
                },
                mAKey : {
                    check: mAKeyCheck,
                }
            },

            submitHandler: function(form) {
                addMerge();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.parent());
            }
        });

    });

    function openSelApp() {
        $('#selApp').modal('show');
        loadApp();
    }

    function selItem(e) {
        $('.caption').hide();
        $(e).find('.caption').show();
        var mAKey = $(e).find('.mAKey').val();
        $('#mAKey').val(mAKey);
        $('#btnSelApp').removeClass('btn-u-default').removeAttr('disabled');
    }

    function htmlspecialchars (string) {
        string = string.toString();
        string = string.replace(/&/g, '&amp;');
        string = string.replace(/"/g, '&quot;');
        string = string.replace(/'/g, "'");
        string = string.replace(/</g, '&lt;');
        string = string.replace(/>/g, '&gt;');
        return string;
    }

    function loadApp() {
        var page = $('#pageNum').val();
        var html = '';
        $.ajax({
            url  : url+"views/merge.php",
            type : "POST",
            data : {page: page, type:type},
            dataType: 'html',
            cache: false,
            beforeSend: function( xhr ) {
                $('#loading').show();
            },
            success : function(result, textStatus, jqXHR) {
                $('#appContainer').html(result);
                $('#loading').hide();
                $("#pager a").each(function(){
                    this.href = 'javascript:void(0)';
                    $(this).click(function(){
                        var newPage;
                        newPage = $(this).text();
                        if ($(this).text() == '>') {
                            newPage = parseInt($(this).prev().text()) + 1;
                        }

                        if ($(this).text() == '<') {
                            newPage = parseInt($(this).next().text()) - 1;
                        }

                        if (newPage > result.pageNum) {
                            newPage = result.pageNum;
                        }

                        if (newPage < 1 ) {
                            newPage = 1;
                        }
                        $('#pageNum').val(newPage);
                        loadApp();
                    });
                });
            },
            error : function(jqXHR, textStatus, errorThrown) {
                $('#loading').hide();
            }
        });
    }


    function unMerge(agKey,mkey) {
        if (confirm(unMergeComfirm)) {
            $.ajax({
                type : "GET",
                data : {ckey:agKey,mkey:mkey,model:'unmerge'},
                url : url+"views/merge.php",
                dataType: 'json',
                cache: false,
                beforeSend: function( xhr ) {
                    $('#btnUnMerge').text(doingunmergebtn + '...').addClass('btn-u-default').attr('disabled', 'disabled');
                },
                success : function(result, textStatus, jqXHR) {
                    code = result.code;
                    if (code == 0) {
                        window.location.href = url+'views/merge.php?key=' + agKey;
                    } else {
                        alert(result.message);
                    }
                    $('#btnUnMerge').text(unMergeBtn).removeClass('btn-u-default').removeAttr('disabled');
                },
                error : function(jqXHR, textStatus, errorThrown) {
                    $('#btnUnMerge').text(unMergeBtn).removeClass('btn-u-default').removeAttr('disabled');
                }
            });
        }
    }



<!doctype html>
<html lang="pt-BR">
    <head>
        <title>
            Add to BrazilJS Weekly - module
        </title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <style type="text/css">
            
            @charset "utf-8";
            
            *{
                box-sizing: border-box:
                -moz-box-sizing: border-box:
            }
            
            body, html{
                background-color: #fcfcfc;
                margin: 0px;
                padding: 0px;
                height: 100%;
                width: 100%;
                font-family: 'Open Sans',sans-serif;
            }
            
            .submitting{
                color: #999;
            }
            .submitting input[type=text], .submitting textarea{
                opacity: 0.4;
            }
            
            header{
                width: 100%;
                height: 36px;
                background: #F7F7F7 url(logo-braziljs.png) no-repeat;
                background-position: 10px center;
                border-bottom: solid 5px #37ACC2;
                margin-bottom: 6px;
            }
            
            #form-content{
                margin: 4px;
                height: 205px;
            }
            
            label{
                min-width: 45px;
                display: inline-block;
            }
            
            input[type=text]{
                width: 236px;
            }
            
            textarea{
                width: 285px;
                height: 110px;
            }
            
            .buttons-area{
                text-align: center;
            }
            
            footer{
                text-align: right;
                margin-right: 6px;
                font-size: .8em;
            }
            
            #submitBtn{
                margin-right: 54px;
                position: absolute;
                left: 94px;
                bottom: 29px;
            }
            
            #formElements{
                height: 182px;
            }
        </style>
        
    </head>
    <body>
        
        <iframe id="hIframe" style="display: none;"></iframe>
        
        <header></header>
        <div id="form-content">
            <form action="https://docs.google.com/spreadsheet/formResponse?formkey=dGxuMG1QOHpCVVlfcDI3TGwxbjR1T2c6MQ&amp;embedded=true&amp;ifq"
                  method="POST"
                  id="ss-form"
                  target="hIframe">
                <div id="formElements">
                    <div>
                        <label class="ss-q-title" for="entry_0">Título</label>
                        <input type="text" name="entry.0.single" readonly="readonly" value="<?php echo $_GET['t'] ?>" class="ss-q-short" id="entry_0">
                    </div>

                    <div>
                        <label class="ss-q-title" for="entry_1">URL</label>
                        <input type="text" name="entry.1.single" readonly="readonly" value="<?php echo $_GET['l'] ?>" class="ss-q-short" id="entry_1">
                    </div>

                    <div>
                        <label class="ss-q-title" for="entry_2">Alguma informação extra?</label>
                        <textarea name="entry.2.single" rows="8" cols="75" class="ss-q-long" id="entry_2"></textarea>
                    </div>
                </div>
                
                <input type="hidden" name="pageNumber" value="0">
                <input type="hidden" name="backupCache" value="">

                <div class="buttons-area">
                    <input id="submitBtn" type="submit" name="submit" value="Submit">
                    <!--<input id="closeBtn" type="button" value="Close">-->
                </div>
            </form>
        </div>
        
        <footer>
            <a href="http://braziljs.org" target="_blank">BrazilJS.org</a>
        </footer>
        
    </body>
    <script>
        var hIframeLoaded= function(){
            //closeLayer();
            document.getElementById('formElements').innerHTML= "Obrigado por submeter a sua ideia!";
            document.getElementById('submitBtn').disabled= true;
        }
        
        var submitting= function(){
            var f= document.forms['ss-form'];
            document.getElementById('hIframe').onload= hIframeLoaded;
            f.className= "submitting";
            return true;
        }
        
        var closeLayer= function(){
            var el= window.ref.getElementById('brazilJS-add2wkly'),
                p= el.parentNode;
            p.removeChild(el);
        }
        
        /*document.getElementById('closeBtn').onclick= function(){
            closeLayer();
        };*/
        
        document.getElementById('submitBtn').addEventListener('click', function(){
            submitting();
        }, false);
        
        
    </script>
</html>
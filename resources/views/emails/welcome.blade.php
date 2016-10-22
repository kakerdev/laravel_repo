<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <style>
        /* Copyright (c) 2010, Yahoo! Inc. All rights reserved. Code licensed under the BSD License: http://developer.yahoo.com/yui/license.html */
        html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:text-top;}sub{vertical-align:text-bottom;}input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;}input,textarea,select{*font-size:100%;}legend{color:#000;}

        html { background: #eee; padding: 10px }
        img { border: 0; }
        #sf-resetcontent { width:970px; margin:0 auto; }
        .sf-reset { font: 11px Verdana, Arial, sans-serif; color: #333 }
        .sf-reset .clear { clear:both; height:0; font-size:0; line-height:0; }
        .sf-reset .clear_fix:after { display:block; height:0; clear:both; visibility:hidden; }
        .sf-reset .clear_fix { display:inline-block; }
        .sf-reset * html .clear_fix { height:1%; }
        .sf-reset .clear_fix { display:block; }
        .sf-reset, .sf-reset .block { margin: auto }
        .sf-reset abbr { border-bottom: 1px dotted #000; cursor: help; }
        .sf-reset p { font-size:14px; line-height:20px; color:#868686; padding-bottom:20px }
        .sf-reset strong { font-weight:bold; }
        .sf-reset a { color:#6c6159; cursor: default; }
        .sf-reset a img { border:none; }
        .sf-reset a:hover { text-decoration:underline; }
        .sf-reset em { font-style:italic; }
        .sf-reset h1, .sf-reset h2 { font: 20px Georgia, "Times New Roman", Times, serif }
        .sf-reset .exception_counter { background-color: #fff; color: #333; padding: 6px; float: left; margin-right: 10px; float: left; display: block; }
        .sf-reset .exception_title { margin-left: 3em; margin-bottom: 0.7em; display: block; }
        .sf-reset .exception_message { margin-left: 3em; display: block; }
        .sf-reset .traces li { font-size:12px; padding: 2px 4px; list-style-type:decimal; margin-left:20px; }
        .sf-reset .block { background-color:#FFFFFF; padding:10px 28px; margin-bottom:20px;
            -webkit-border-bottom-right-radius: 16px;
            -webkit-border-bottom-left-radius: 16px;
            -moz-border-radius-bottomright: 16px;
            -moz-border-radius-bottomleft: 16px;
            border-bottom-right-radius: 16px;
            border-bottom-left-radius: 16px;
            border-bottom:1px solid #ccc;
            border-right:1px solid #ccc;
            border-left:1px solid #ccc;
            word-wrap: break-word;
        }
        .sf-reset .block_exception { background-color:#ddd; color: #333; padding:20px;
            -webkit-border-top-left-radius: 16px;
            -webkit-border-top-right-radius: 16px;
            -moz-border-radius-topleft: 16px;
            -moz-border-radius-topright: 16px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            border-top:1px solid #ccc;
            border-right:1px solid #ccc;
            border-left:1px solid #ccc;
            overflow: hidden;
            word-wrap: break-word;
        }
        .sf-reset a { background:none; color:#868686; text-decoration:none; }
        .sf-reset a:hover { background:none; color:#313131; text-decoration:underline; }
        .sf-reset ol { padding: 10px 0; }
        .sf-reset h1 { background-color:#FFFFFF; padding: 15px 28px; margin-bottom: 20px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<div id="sf-resetcontent" class="sf-reset">
    <h1>Whoops, looks like something went wrong.</h1>
    <h2 class="block_exception clear_fix">
        <span class="exception_counter">1/1</span>
        <span class="exception_title"><abbr title="InvalidArgumentException">InvalidArgumentException</abbr> in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">FileViewFinder.php line 137</a>:</span>
        <span class="exception_message">View [emails.welcome] not found.</span>
    </h2>
    <div class="block">
        <ol class="traces list_exception">
            <li> in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">FileViewFinder.php line 137</a></li>
            <li>at <abbr title="Illuminate\View\FileViewFinder">FileViewFinder</abbr>->findInPaths('emails.welcome', <em>array</em>('/var/www/html/praca/laravel/work/resources/views')) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php line 79" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">FileViewFinder.php line 79</a></li>
            <li>at <abbr title="Illuminate\View\FileViewFinder">FileViewFinder</abbr>->find('emails.welcome') in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/View/Factory.php line 174" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Factory.php line 174</a></li>
            <li>at <abbr title="Illuminate\View\Factory">Factory</abbr>->make('emails.welcome', <em>array</em>('user' => <em>object</em>(<abbr title="Illuminate\Database\Eloquent\Collection">Collection</abbr>), 'message' => <em>object</em>(<abbr title="Illuminate\Mail\Message">Message</abbr>))) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php line 430" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Mailer.php line 430</a></li>
            <li>at <abbr title="Illuminate\Mail\Mailer">Mailer</abbr>->getView('emails.welcome', <em>array</em>('user' => <em>object</em>(<abbr title="Illuminate\Database\Eloquent\Collection">Collection</abbr>), 'message' => <em>object</em>(<abbr title="Illuminate\Mail\Message">Message</abbr>))) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php line 310" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Mailer.php line 310</a></li>
            <li>at <abbr title="Illuminate\Mail\Mailer">Mailer</abbr>->addContent(<em>object</em>(<abbr title="Illuminate\Mail\Message">Message</abbr>), 'emails.welcome', <em>null</em>, <em>null</em>, <em>array</em>('user' => <em>object</em>(<abbr title="Illuminate\Database\Eloquent\Collection">Collection</abbr>), 'message' => <em>object</em>(<abbr title="Illuminate\Mail\Message">Message</abbr>))) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php line 186" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Mailer.php line 186</a></li>
            <li>at <abbr title="Illuminate\Mail\Mailer">Mailer</abbr>->send('emails.welcome', <em>array</em>('user' => <em>object</em>(<abbr title="Illuminate\Database\Eloquent\Collection">Collection</abbr>), 'message' => <em>object</em>(<abbr title="Illuminate\Mail\Message">Message</abbr>)), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php line 237" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Facade.php line 237</a></li>
            <li>at <abbr title="Illuminate\Support\Facades\Facade">Facade</abbr>::__callStatic('send', <em>array</em>('emails.welcome', <em>array</em>('user' => <em>object</em>(<abbr title="Illuminate\Database\Eloquent\Collection">Collection</abbr>)), <em>object</em>(<abbr title="Closure">Closure</abbr>))) in <a title="/var/www/html/praca/laravel/work/app/Http/Controllers/AuthenticationController.php line 82" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">AuthenticationController.php line 82</a></li>
            <li>at <abbr title="App\Http\Controllers\AuthenticationController">AuthenticationController</abbr>->sendPassword(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</li>
            <li>at <abbr title=""></abbr>call_user_func_array(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\AuthenticationController">AuthenticationController</abbr>), 'sendPassword'), <em>array</em>(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Controller.php line 55" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Controller.php line 55</a></li>
            <li>at <abbr title="Illuminate\Routing\Controller">Controller</abbr>->callAction('sendPassword', <em>array</em>(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php line 44" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">ControllerDispatcher.php line 44</a></li>
            <li>at <abbr title="Illuminate\Routing\ControllerDispatcher">ControllerDispatcher</abbr>->dispatch(<em>object</em>(<abbr title="Illuminate\Routing\Route">Route</abbr>), <em>object</em>(<abbr title="App\Http\Controllers\AuthenticationController">AuthenticationController</abbr>), 'sendPassword') in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Route.php line 189" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Route.php line 189</a></li>
            <li>at <abbr title="Illuminate\Routing\Route">Route</abbr>->runController() in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Route.php line 144" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Route.php line 144</a></li>
            <li>at <abbr title="Illuminate\Routing\Route">Route</abbr>->run(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 642" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Router.php line 642</a></li>
            <li>at <abbr title="Illuminate\Routing\Router">Router</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 53" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 53</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php line 41" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">SubstituteBindings.php line 41</a></li>
            <li>at <abbr title="Illuminate\Routing\Middleware\SubstituteBindings">SubstituteBindings</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 137</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 33" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 33</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php line 49" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">ShareErrorsFromSession.php line 49</a></li>
            <li>at <abbr title="Illuminate\View\Middleware\ShareErrorsFromSession">ShareErrorsFromSession</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 137</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 33" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 33</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php line 64" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">StartSession.php line 64</a></li>
            <li>at <abbr title="Illuminate\Session\Middleware\StartSession">StartSession</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 137</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 33" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 33</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php line 37" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">AddQueuedCookiesToResponse.php line 37</a></li>
            <li>at <abbr title="Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse">AddQueuedCookiesToResponse</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 137</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 33" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 33</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php line 59" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">EncryptCookies.php line 59</a></li>
            <li>at <abbr title="Illuminate\Cookie\Middleware\EncryptCookies">EncryptCookies</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 137</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 33" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 33</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 104" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 104</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->then(<em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 644" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Router.php line 644</a></li>
            <li>at <abbr title="Illuminate\Routing\Router">Router</abbr>->runRouteWithinStack(<em>object</em>(<abbr title="Illuminate\Routing\Route">Route</abbr>), <em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 618" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Router.php line 618</a></li>
            <li>at <abbr title="Illuminate\Routing\Router">Router</abbr>->dispatchToRoute(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 596" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Router.php line 596</a></li>
            <li>at <abbr title="Illuminate\Routing\Router">Router</abbr>->dispatch(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php line 267" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Kernel.php line 267</a></li>
            <li>at <abbr title="Illuminate\Foundation\Http\Kernel">Kernel</abbr>->Illuminate\Foundation\Http\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 53" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 53</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php line 46" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">CheckForMaintenanceMode.php line 46</a></li>
            <li>at <abbr title="Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode">CheckForMaintenanceMode</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 137" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 137</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 33" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 33</a></li>
            <li>at <abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr>->Illuminate\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 104" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Pipeline.php line 104</a></li>
            <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->then(<em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php line 149" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Kernel.php line 149</a></li>
            <li>at <abbr title="Illuminate\Foundation\Http\Kernel">Kernel</abbr>->sendRequestThroughRouter(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php line 116" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">Kernel.php line 116</a></li>
            <li>at <abbr title="Illuminate\Foundation\Http\Kernel">Kernel</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/var/www/html/praca/laravel/work/public/index.php line 53" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">index.php line 53</a></li>
            <li>at <abbr title=""></abbr>require_once('/var/www/html/praca/laravel/work/public/index.php') in <a title="/var/www/html/praca/laravel/work/server.php line 21" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">server.php line 21</a></li>
        </ol>
    </div>

</div>
</body>
</html>
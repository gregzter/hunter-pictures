<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Shiny Hunt</title>

    <link rel="stylesheet" type="text/css" href="css/desktop.css" />

    <!-- GC -->

    <!-- <x-compile> -->
    <!-- <x-bootstrap> -->
    <script type="text/javascript" src="vendor/sencha/extjs/examples/shared/include-ext.js"></script>
    <script type="text/javascript" src="vendor/sencha/extjs/examples/shared/options-toolbar.js"></script>
    <!-- </x-bootstrap> -->
    <script type="text/javascript">
        Ext.Loader.setPath({
            'Ext.ux.desktop': 'js',
            MyDesktop: ''
        });

        Ext.require('MyDesktop.App');

        var myDesktopApp;
        Ext.onReady(function () {
            myDesktopApp = new MyDesktop.App();
        });
    </script>
    <!-- </x-compile> -->
</head>

<body>

    <a href="http://www.shiny-hunt.org" target="_blank" alt="Powered by Kath Shiny"
       id="poweredby"><div></div></a>

</body>
</html>

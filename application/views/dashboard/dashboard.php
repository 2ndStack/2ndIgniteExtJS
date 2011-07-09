<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard</title>

    <style type="text/css">


        .x-column-header-inner {
            background-color: #a3bae9;

        }

        div.x-grid-cell-inner {
            background-color: yellow;
        }

        #atmofflinepanel div.x-grid-cell-inner {
            background-color: red;
        }

        div#gridview-1036.x-component {
            background-color: #0000DD;
        }

        #atmcashflow div.x-grid-cell-inner, #atmhistory  div.x-grid-cell-inner {
            background-color: white;
        }

        #loading-mask {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 20000;
            background-color: white;
        }

        #loading {
            position: absolute;
            left: 50%;
            top: 50%;
            padding: 2px;
            z-index: 20001;
            height: auto;
            margin: -35px 0 0 -30px;
        }

        #loading .loading-indicator {
            background: url(<?php echo base_url() . 'static/'?>images/extanim32.gif) no-repeat;
            color: #555;
            font: bold 13px tahoma, arial, helvetica;
            padding: 8px 42px;
            margin: 0;
            text-align: center;
            height: auto;
        }
    </style>

    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url() . 'static/'?>resources/css/ext-all.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'static/'?>js/dashboard/portal.css"/>


    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/ext-all-debug.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/dashboard/examples.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/dashboard/portal.js"></script>


    <script type="text/javascript">
        Ext.Loader.setConfig({enabled:'true'});
        Ext.Loader.setPath('Ext.app', '<?php echo base_url() . 'static/'?>js/dashboard/classes');

        Ext.require([
            'Ext.layout.container.*',
            'Ext.resizer.Splitter',
            'Ext.fx.target.Element',
            'Ext.fx.target.Component',
            'Ext.window.Window',
            'Ext.app.PortalColumn',
            'Ext.app.PortalPanel',
            'Ext.app.Portlet',
            'Ext.app.PortalDropZone',
            'Ext.app.GridPortlet',
            'Ext.app.ChartPortlet',
            'Ext.app.PieChartPortlet'
        ]);

        Ext.onReady(function() {
            Ext.create('Ext.app.Portal', {
                imgLink:"<?php echo base_url() . 'static/'?>images/ewidt/logo-mod.png",
                loggedUser:'<?php echo $loggedUser->first_name; ?>',
                logoutLink:'<?php echo site_url("auth/logout")?>'
            });

            setTimeout(function() {
                Ext.get('loading').remove();
                Ext.get('loading-mask').fadeOut({remove:true});
            }, 250);
        });
    </script>
</head>
<body>
<span id="app-msg" style="display:none;"></span>

<div id="loading-mask"></div>
<div id="loading">
    <div class="loading-indicator">
        Loading...
    </div>
</div>

</body>
</html>

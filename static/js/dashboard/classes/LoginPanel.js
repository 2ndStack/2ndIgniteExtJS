Ext.define('Ext.app.LoginPanel', {
    extend : 'Ext.form.Panel',
    alias : 'widget.LoginPanel',

    url:'',
    imgUrl:'',
    successRedirect:'',

    initComponent: function() {
        Ext.apply(this, {
            fieldDefaults: {
                labelAlign: 'left',
                labelWidth: 90,
                anchor: '100%'
            },
            frame: true,
            height: 220,
            width: 400,
            items: [
                Ext.create('Ext.Component', {
                    html:'<div style="text-align: center;"><img style="text-align: center;" src="' + this.imgUrl + '" alt="Euronet"/>' +
                        '<label style="font-size: 30px;font-weight: bold;">&nbsp;&nbsp;ExtJS CI</label>' +
                        ' </div>'
                }) ,
                {
                    xtype:'fieldset',
                    title: 'Login',
                    collapsible: false,
                    defaultType: 'textfield',
                    defaults: {anchor: '100%'},
                    layout: 'anchor',
                    items:[
                        {
                            id:'usernameForm',
                            xtype: 'textfield',
                            name: 'email',
                            fieldLabel: 'Username',
                            inputType:'text',
                            value: ''
                        },
                        {
                            xtype: 'textfield',
                            name: 'password',
                            inputType: 'password',
                            fieldLabel: 'Password'
                        }
                    ]
                }

            ],

            buttons: [
                {
                    text: 'Cancel',
                    handler: function() {
                        this.up('form').getForm().reset();
                    }
                },
                {
                    text: 'Submit',
                    formBind: true, //only enabled once the form is valid
//                    disabled: true,
                    handler: function() {
                        var form = this.up('form').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function(form, action) {
                                    window.location = form.successRedirect;
                                },
                                failure: function(form, action) {
                                    Ext.Msg.alert('Failed', action.result.msg);
                                }
                            });
                        }
                    }
                }
            ]
        });
        this.callParent(arguments);
    }
});

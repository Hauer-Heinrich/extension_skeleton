### Add layouts to choose in BE
tx_extension_skeleton_listview.layouts {
    1 = example layout title
}

mod {
    wizards.newContentElement.wizardItems {
        ### Add plugin to tab "plugin" at the BE NewContentElementWizard
        plugins {
            elements {
                ### Pluginname lowercase
                listview {
                    iconIdentifier = extension_skeleton-plugin-example
                    ### Title witch is shown in BE tab "Plugins"
                    title = Example
                    ### Description witch is shown in BE tab "Plugins"
                    description = Example description
                    tt_content_defValues {
                        CType = list
                        ### PluginSignature = ExtensionName_PluginName lowercase
                        list_type = extensionskeleton_listview
                    }
                }
            }
            show = *
        }

        ### Custom Tab identifier Name
        myIdentifier {
            ### New tab title at the BE NewContentElementWizard
            header = Example
            ### After witch tab this new tab is shown (optional)
            after = common
            elements {
                ### Pluginname lowercase
                listview {
                    iconIdentifier = extension_skeleton-plugin-example
                    ### Title witch is shown in new tab
                    title = Example
                    ### Description witch is shown in new tab
                    description = List example
                    tt_content_defValues {
                        CType = list
                        ### PluginSignature = ExtensionName_PluginName lowercase
                        list_type = extensionskeleton_listview
                    }
                }
            }
            show = *
        }
    }

    ### Add simple template for BE preview of the plugin
    web_layout.tt_content.preview.list {
        extensionskeleton_listview = EXT:extension_skeleton/Resources/Private/Backend/Templates/ExtensionSkeletonBackend.html
    }
}

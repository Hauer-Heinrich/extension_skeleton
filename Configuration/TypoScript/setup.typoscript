### tx_extensionname_pluginname
plugin.tx_extension_skeleton_listview {
    view {
        templateRootPaths {
            0 = EXT:extension_skeleton/Resources/Private/Templates/
            1 = {$plugin.tx_extension_skeleton_listview.view.templateRootPath}
        }
        partialRootPaths {
            0 = EXT:extension_skeleton/Resources/Private/Partials/
            1 = {$plugin.tx_extension_skeleton_listview.view.partialRootPath}
        }
        layoutRootPaths {
            0 = EXT:extension_skeleton/Resources/Private/Layouts/
            1 = {$plugin.tx_extension_skeleton_listview.view.layoutRootPath}
        }
    }

    persistence {
        storagePid = {$plugin.tx_extension_skeleton_listview.persistence.storagePid}
        #recursive = 1
    }

    features {
        skipDefaultArguments = 1

        ### if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0

        ### Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }

    mvc {
        callDefaultActionIfActionCantBeResolved = 1
    }

    settings {
        exampleSettingFromConstants = {$plugin.tx_extension_skeleton_listview.settings.exampleSetting}
    }
}

config.tx_extbase {
    persistence {
        classes {
            HauerHeinrich\ExtensionSkeleton\Domain\Model\Example {
                mapping {
                    tableName = tx_extension_skeleton_domain_model_example
                }
            }

            HauerHeinrich\ExtensionSkeleton\Domain\Model\Category {
                mapping {
                    tableName = sys_category
                }
            }
        }
    }
}

page {
    includeCSS {
        extension_skeleton = {$extension_skeleton.urls.extResources}Public/Css/example.css
    }

    includeJSFooter {
        extension_skeleton = {$extension_skeleton.urls.extResources}Public/JavaScript/example.js
    }
}

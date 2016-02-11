<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
// 2.0
'wp-admin/import-b2.php',
'wp-admin/import-blogger.php',
'wp-admin/import-greymatter.php',
'wp-admin/import-livejournal.php',
'wp-admin/import-mt.php',
'wp-admin/import-rss.php',
'wp-admin/import-textpattern.php',
'wp-admin/quicktags.js',
'wp-images/fade-butt.png',
'wp-images/get-firefox.png',
'wp-images/header-shadow.png',
'wp-images/smilies',
'wp-images/wp-small.png',
'wp-images/wpminilogo.png',
'wp.php',
// 2.0.8
'libs/js/tinymce/plugins/inlinepopups/readme.txt',
// 2.1
'wp-admin/edit-form-ajax-cat.php',
'wp-admin/execute-pings.php',
'wp-admin/inline-uploading.php',
'wp-admin/link-categories.php',
'wp-admin/list-manipulation.js',
'wp-admin/list-manipulation.php',
'libs/comment-functions.php',
'libs/feed-functions.php',
'libs/functions-compat.php',
'libs/functions-formatting.php',
'libs/functions-post.php',
'libs/js/dbx-key.js',
'libs/js/tinymce/plugins/autosave/langs/cs.js',
'libs/js/tinymce/plugins/autosave/langs/sv.js',
'libs/links.php',
'libs/pluggable-functions.php',
'libs/template-functions-author.php',
'libs/template-functions-category.php',
'libs/template-functions-general.php',
'libs/template-functions-links.php',
'libs/template-functions-post.php',
'libs/wp-l10n.php',
// 2.2
'wp-admin/cat-js.php',
'wp-admin/import/b2.php',
'libs/js/autosave-js.php',
'libs/js/list-manipulation-js.php',
'libs/js/wp-ajax-js.php',
// 2.3
'wp-admin/admin-db.php',
'wp-admin/cat.js',
'wp-admin/categories.js',
'wp-admin/custom-fields.js',
'wp-admin/dbx-admin-key.js',
'wp-admin/edit-comments.js',
'wp-admin/install-rtl.css',
'wp-admin/install.css',
'wp-admin/upgrade-schema.php',
'wp-admin/upload-functions.php',
'wp-admin/upload-rtl.css',
'wp-admin/upload.css',
'wp-admin/upload.js',
'wp-admin/users.js',
'wp-admin/widgets-rtl.css',
'wp-admin/widgets.css',
'wp-admin/xfn.js',
'libs/js/tinymce/license.html',
// 2.5
'wp-admin/css/upload.css',
'wp-admin/images/box-bg-left.gif',
'wp-admin/images/box-bg-right.gif',
'wp-admin/images/box-bg.gif',
'wp-admin/images/box-butt-left.gif',
'wp-admin/images/box-butt-right.gif',
'wp-admin/images/box-butt.gif',
'wp-admin/images/box-head-left.gif',
'wp-admin/images/box-head-right.gif',
'wp-admin/images/box-head.gif',
'wp-admin/images/heading-bg.gif',
'wp-admin/images/login-bkg-bottom.gif',
'wp-admin/images/login-bkg-tile.gif',
'wp-admin/images/notice.gif',
'wp-admin/images/toggle.gif',
'wp-admin/includes/upload.php',
'wp-admin/js/dbx-admin-key.js',
'wp-admin/js/link-cat.js',
'wp-admin/profile-update.php',
'wp-admin/templates.php',
'libs/images/wlw/WpComments.png',
'libs/images/wlw/WpIcon.png',
'libs/images/wlw/WpWatermark.png',
'libs/js/dbx.js',
'libs/js/fat.js',
'libs/js/list-manipulation.js',
'libs/js/tinymce/langs/en.js',
'libs/js/tinymce/plugins/autosave/editor_plugin_src.js',
'libs/js/tinymce/plugins/autosave/langs',
'libs/js/tinymce/plugins/directionality/images',
'libs/js/tinymce/plugins/directionality/langs',
'libs/js/tinymce/plugins/inlinepopups/css',
'libs/js/tinymce/plugins/inlinepopups/images',
'libs/js/tinymce/plugins/inlinepopups/jscripts',
'libs/js/tinymce/plugins/paste/images',
'libs/js/tinymce/plugins/paste/jscripts',
'libs/js/tinymce/plugins/paste/langs',
'libs/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
'libs/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
'libs/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
'libs/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
'libs/js/tinymce/plugins/spellchecker/css/spellchecker.css',
'libs/js/tinymce/plugins/spellchecker/images',
'libs/js/tinymce/plugins/spellchecker/langs',
'libs/js/tinymce/plugins/spellchecker/tinyspell.php',
'libs/js/tinymce/plugins/wordpress/images',
'libs/js/tinymce/plugins/wordpress/langs',
'libs/js/tinymce/plugins/wordpress/wordpress.css',
'libs/js/tinymce/plugins/wphelp',
'libs/js/tinymce/themes/advanced/css',
'libs/js/tinymce/themes/advanced/images',
'libs/js/tinymce/themes/advanced/jscripts',
'libs/js/tinymce/themes/advanced/langs',
// 2.5.1
'libs/js/tinymce/tiny_mce_gzip.php',
// 2.6
'wp-admin/bookmarklet.php',
'libs/js/jquery/jquery.dimensions.min.js',
'libs/js/tinymce/plugins/wordpress/popups.css',
'libs/js/wp-ajax.js',
// 2.7
'wp-admin/css/press-this-ie-rtl.css',
'wp-admin/css/press-this-ie.css',
'wp-admin/css/upload-rtl.css',
'wp-admin/edit-form.php',
'wp-admin/images/comment-pill.gif',
'wp-admin/images/comment-stalk-classic.gif',
'wp-admin/images/comment-stalk-fresh.gif',
'wp-admin/images/comment-stalk-rtl.gif',
'wp-admin/images/del.png',
'wp-admin/images/gear.png',
'wp-admin/images/media-button-gallery.gif',
'wp-admin/images/media-buttons.gif',
'wp-admin/images/postbox-bg.gif',
'wp-admin/images/tab.png',
'wp-admin/images/tail.gif',
'wp-admin/js/forms.js',
'wp-admin/js/upload.js',
'wp-admin/link-import.php',
'libs/images/audio.png',
'libs/images/css.png',
'libs/images/default.png',
'libs/images/doc.png',
'libs/images/exe.png',
'libs/images/html.png',
'libs/images/js.png',
'libs/images/pdf.png',
'libs/images/swf.png',
'libs/images/tar.png',
'libs/images/text.png',
'libs/images/video.png',
'libs/images/zip.png',
'libs/js/tinymce/tiny_mce_config.php',
'libs/js/tinymce/tiny_mce_ext.js',
// 2.8
'wp-admin/js/users.js',
'libs/js/swfupload/plugins/swfupload.documentready.js',
'libs/js/swfupload/plugins/swfupload.graceful_degradation.js',
'libs/js/swfupload/swfupload_f9.swf',
'libs/js/tinymce/plugins/autosave',
'libs/js/tinymce/plugins/paste/css',
'libs/js/tinymce/utils/mclayer.js',
'libs/js/tinymce/wordpress.css',
// 2.8.5
'wp-admin/import/btt.php',
'wp-admin/import/jkw.php',
// 2.9
'wp-admin/js/page.dev.js',
'wp-admin/js/page.js',
'wp-admin/js/set-post-thumbnail-handler.dev.js',
'wp-admin/js/set-post-thumbnail-handler.js',
'wp-admin/js/slug.dev.js',
'wp-admin/js/slug.js',
'libs/gettext.php',
'libs/js/tinymce/plugins/wordpress/js',
'libs/streams.php',
// MU
'README.txt',
'htaccess.dist',
'index-install.php',
'wp-admin/css/mu-rtl.css',
'wp-admin/css/mu.css',
'wp-admin/images/site-admin.png',
'wp-admin/includes/mu.php',
'wp-admin/wpmu-admin.php',
'wp-admin/wpmu-blogs.php',
'wp-admin/wpmu-edit.php',
'wp-admin/wpmu-options.php',
'wp-admin/wpmu-themes.php',
'wp-admin/wpmu-upgrade-site.php',
'wp-admin/wpmu-users.php',
'libs/images/wordpress-mu.png',
'libs/wpmu-default-filters.php',
'libs/wpmu-functions.php',
'wpmu-settings.php',
// 3.0
'wp-admin/categories.php',
'wp-admin/edit-category-form.php',
'wp-admin/edit-page-form.php',
'wp-admin/edit-pages.php',
'wp-admin/images/admin-header-footer.png',
'wp-admin/images/browse-happy.gif',
'wp-admin/images/ico-add.png',
'wp-admin/images/ico-close.png',
'wp-admin/images/ico-edit.png',
'wp-admin/images/ico-viewpage.png',
'wp-admin/images/fav-top.png',
'wp-admin/images/screen-options-left.gif',
'wp-admin/images/wp-logo-vs.gif',
'wp-admin/images/wp-logo.gif',
'wp-admin/import',
'wp-admin/js/wp-gears.dev.js',
'wp-admin/js/wp-gears.js',
'wp-admin/options-misc.php',
'wp-admin/page-new.php',
'wp-admin/page.php',
'wp-admin/rtl.css',
'wp-admin/rtl.dev.css',
'wp-admin/update-links.php',
'wp-admin/wp-admin.css',
'wp-admin/wp-admin.dev.css',
'libs/js/codepress',
'libs/js/codepress/engines/khtml.js',
'libs/js/codepress/engines/older.js',
'libs/js/jquery/autocomplete.dev.js',
'libs/js/jquery/autocomplete.js',
'libs/js/jquery/interface.js',
'libs/js/scriptaculous/prototype.js',
'libs/js/tinymce/wp-tinymce.js',
// 3.1
'wp-admin/edit-attachment-rows.php',
'wp-admin/edit-link-categories.php',
'wp-admin/edit-link-category-form.php',
'wp-admin/edit-post-rows.php',
'wp-admin/images/button-grad-active-vs.png',
'wp-admin/images/button-grad-vs.png',
'wp-admin/images/fav-arrow-vs-rtl.gif',
'wp-admin/images/fav-arrow-vs.gif',
'wp-admin/images/fav-top-vs.gif',
'wp-admin/images/list-vs.png',
'wp-admin/images/screen-options-right-up.gif',
'wp-admin/images/screen-options-right.gif',
'wp-admin/images/visit-site-button-grad-vs.gif',
'wp-admin/images/visit-site-button-grad.gif',
'wp-admin/link-category.php',
'wp-admin/sidebar.php',
'libs/classes.php',
'libs/js/tinymce/blank.htm',
'libs/js/tinymce/plugins/media/css/content.css',
'libs/js/tinymce/plugins/media/img',
'libs/js/tinymce/plugins/safari',
// 3.2
'wp-admin/images/logo-login.gif',
'wp-admin/images/star.gif',
'wp-admin/js/list-table.dev.js',
'wp-admin/js/list-table.js',
'libs/default-embeds.php',
'libs/js/tinymce/plugins/wordpress/img/help.gif',
'libs/js/tinymce/plugins/wordpress/img/more.gif',
'libs/js/tinymce/plugins/wordpress/img/toolbars.gif',
'libs/js/tinymce/themes/advanced/img/fm.gif',
'libs/js/tinymce/themes/advanced/img/sflogo.png',
// 3.3
'wp-admin/css/colors-classic-rtl.css',
'wp-admin/css/colors-classic-rtl.dev.css',
'wp-admin/css/colors-fresh-rtl.css',
'wp-admin/css/colors-fresh-rtl.dev.css',
'wp-admin/css/dashboard-rtl.dev.css',
'wp-admin/css/dashboard.dev.css',
'wp-admin/css/global-rtl.css',
'wp-admin/css/global-rtl.dev.css',
'wp-admin/css/global.css',
'wp-admin/css/global.dev.css',
'wp-admin/css/install-rtl.dev.css',
'wp-admin/css/login-rtl.dev.css',
'wp-admin/css/login.dev.css',
'wp-admin/css/ms.css',
'wp-admin/css/ms.dev.css',
'wp-admin/css/nav-menu-rtl.css',
'wp-admin/css/nav-menu-rtl.dev.css',
'wp-admin/css/nav-menu.css',
'wp-admin/css/nav-menu.dev.css',
'wp-admin/css/plugin-install-rtl.css',
'wp-admin/css/plugin-install-rtl.dev.css',
'wp-admin/css/plugin-install.css',
'wp-admin/css/plugin-install.dev.css',
'wp-admin/css/press-this-rtl.dev.css',
'wp-admin/css/press-this.dev.css',
'wp-admin/css/theme-editor-rtl.css',
'wp-admin/css/theme-editor-rtl.dev.css',
'wp-admin/css/theme-editor.css',
'wp-admin/css/theme-editor.dev.css',
'wp-admin/css/theme-install-rtl.css',
'wp-admin/css/theme-install-rtl.dev.css',
'wp-admin/css/theme-install.css',
'wp-admin/css/theme-install.dev.css',
'wp-admin/css/widgets-rtl.dev.css',
'wp-admin/css/widgets.dev.css',
'wp-admin/includes/internal-linking.php',
'libs/images/admin-bar-sprite-rtl.png',
'libs/js/jquery/ui.button.js',
'libs/js/jquery/ui.core.js',
'libs/js/jquery/ui.dialog.js',
'libs/js/jquery/ui.draggable.js',
'libs/js/jquery/ui.droppable.js',
'libs/js/jquery/ui.mouse.js',
'libs/js/jquery/ui.position.js',
'libs/js/jquery/ui.resizable.js',
'libs/js/jquery/ui.selectable.js',
'libs/js/jquery/ui.sortable.js',
'libs/js/jquery/ui.tabs.js',
'libs/js/jquery/ui.widget.js',
'libs/js/l10n.dev.js',
'libs/js/l10n.js',
'libs/js/tinymce/plugins/wplink/css',
'libs/js/tinymce/plugins/wplink/img',
'libs/js/tinymce/plugins/wplink/js',
'libs/js/tinymce/themes/advanced/img/wpicons.png',
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
// Don't delete, yet: 'wp-rss.php',
// Don't delete, yet: 'wp-rdf.php',
// Don't delete, yet: 'wp-rss2.php',
// Don't delete, yet: 'wp-commentsrss2.php',
// Don't delete, yet: 'wp-atom.php',
// Don't delete, yet: 'wp-feed.php',
// 3.4
'wp-admin/images/gray-star.png',
'wp-admin/images/logo-login.png',
'wp-admin/images/star.png',
'wp-admin/index-extra.php',
'wp-admin/network/index-extra.php',
'wp-admin/user/index-extra.php',
'wp-admin/images/screenshots/admin-flyouts.png',
'wp-admin/images/screenshots/coediting.png',
'wp-admin/images/screenshots/drag-and-drop.png',
'wp-admin/images/screenshots/help-screen.png',
'wp-admin/images/screenshots/media-icon.png',
'wp-admin/images/screenshots/new-feature-pointer.png',
'wp-admin/images/screenshots/welcome-screen.png',
'libs/css/editor-buttons.css',
'libs/css/editor-buttons.dev.css',
'libs/js/tinymce/plugins/paste/blank.htm',
'libs/js/tinymce/plugins/wordpress/css',
'libs/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
'libs/js/tinymce/plugins/wordpress/img/embedded.png',
'libs/js/tinymce/plugins/wordpress/img/more_bug.gif',
'libs/js/tinymce/plugins/wordpress/img/page_bug.gif',
'libs/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
'libs/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
'libs/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
'libs/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
'libs/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
'libs/js/tinymce/plugins/wpgallery/img/gallery.png',
'libs/js/tinymce/plugins/wplink/editor_plugin.dev.js',
// Don't delete, yet: 'wp-pass.php',
// Don't delete, yet: 'wp-register.php',
// 3.5
'wp-admin/gears-manifest.php',
'wp-admin/includes/manifest.php',
'wp-admin/images/archive-link.png',
'wp-admin/images/blue-grad.png',
'wp-admin/images/button-grad-active.png',
'wp-admin/images/button-grad.png',
'wp-admin/images/ed-bg-vs.gif',
'wp-admin/images/ed-bg.gif',
'wp-admin/images/fade-butt.png',
'wp-admin/images/fav-arrow-rtl.gif',
'wp-admin/images/fav-arrow.gif',
'wp-admin/images/fav-vs.png',
'wp-admin/images/fav.png',
'wp-admin/images/gray-grad.png',
'wp-admin/images/loading-publish.gif',
'wp-admin/images/logo-ghost.png',
'wp-admin/images/logo.gif',
'wp-admin/images/menu-arrow-frame-rtl.png',
'wp-admin/images/menu-arrow-frame.png',
'wp-admin/images/menu-arrows.gif',
'wp-admin/images/menu-bits-rtl-vs.gif',
'wp-admin/images/menu-bits-rtl.gif',
'wp-admin/images/menu-bits-vs.gif',
'wp-admin/images/menu-bits.gif',
'wp-admin/images/menu-dark-rtl-vs.gif',
'wp-admin/images/menu-dark-rtl.gif',
'wp-admin/images/menu-dark-vs.gif',
'wp-admin/images/menu-dark.gif',
'wp-admin/images/required.gif',
'wp-admin/images/screen-options-toggle-vs.gif',
'wp-admin/images/screen-options-toggle.gif',
'wp-admin/images/toggle-arrow-rtl.gif',
'wp-admin/images/toggle-arrow.gif',
'wp-admin/images/upload-classic.png',
'wp-admin/images/upload-fresh.png',
'wp-admin/images/white-grad-active.png',
'wp-admin/images/white-grad.png',
'wp-admin/images/widgets-arrow-vs.gif',
'wp-admin/images/widgets-arrow.gif',
'wp-admin/images/wpspin_dark.gif',
'libs/images/upload.png',
'libs/js/prototype.js',
'libs/js/scriptaculous',
'wp-admin/css/wp-admin-rtl.dev.css',
'wp-admin/css/wp-admin.dev.css',
'wp-admin/css/media-rtl.dev.css',
'wp-admin/css/media.dev.css',
'wp-admin/css/colors-classic.dev.css',
'wp-admin/css/customize-controls-rtl.dev.css',
'wp-admin/css/customize-controls.dev.css',
'wp-admin/css/ie-rtl.dev.css',
'wp-admin/css/ie.dev.css',
'wp-admin/css/install.dev.css',
'wp-admin/css/colors-fresh.dev.css',
'libs/js/customize-base.dev.js',
'libs/js/json2.dev.js',
'libs/js/comment-reply.dev.js',
'libs/js/customize-preview.dev.js',
'libs/js/wplink.dev.js',
'libs/js/tw-sack.dev.js',
'libs/js/wp-list-revisions.dev.js',
'libs/js/autosave.dev.js',
'libs/js/admin-bar.dev.js',
'libs/js/quicktags.dev.js',
'libs/js/wp-ajax-response.dev.js',
'libs/js/wp-pointer.dev.js',
'libs/js/hoverIntent.dev.js',
'libs/js/colorpicker.dev.js',
'libs/js/wp-lists.dev.js',
'libs/js/customize-loader.dev.js',
'libs/js/jquery/jquery.table-hotkeys.dev.js',
'libs/js/jquery/jquery.color.dev.js',
'libs/js/jquery/jquery.color.js',
'libs/js/jquery/jquery.hotkeys.dev.js',
'libs/js/jquery/jquery.form.dev.js',
'libs/js/jquery/suggest.dev.js',
'wp-admin/js/xfn.dev.js',
'wp-admin/js/set-post-thumbnail.dev.js',
'wp-admin/js/comment.dev.js',
'wp-admin/js/theme.dev.js',
'wp-admin/js/cat.dev.js',
'wp-admin/js/password-strength-meter.dev.js',
'wp-admin/js/user-profile.dev.js',
'wp-admin/js/theme-preview.dev.js',
'wp-admin/js/post.dev.js',
'wp-admin/js/media-upload.dev.js',
'wp-admin/js/word-count.dev.js',
'wp-admin/js/plugin-install.dev.js',
'wp-admin/js/edit-comments.dev.js',
'wp-admin/js/media-gallery.dev.js',
'wp-admin/js/custom-fields.dev.js',
'wp-admin/js/custom-background.dev.js',
'wp-admin/js/common.dev.js',
'wp-admin/js/inline-edit-tax.dev.js',
'wp-admin/js/gallery.dev.js',
'wp-admin/js/utils.dev.js',
'wp-admin/js/widgets.dev.js',
'wp-admin/js/wp-fullscreen.dev.js',
'wp-admin/js/nav-menu.dev.js',
'wp-admin/js/dashboard.dev.js',
'wp-admin/js/link.dev.js',
'wp-admin/js/user-suggest.dev.js',
'wp-admin/js/postbox.dev.js',
'wp-admin/js/tags.dev.js',
'wp-admin/js/image-edit.dev.js',
'wp-admin/js/media.dev.js',
'wp-admin/js/customize-controls.dev.js',
'wp-admin/js/inline-edit-post.dev.js',
'wp-admin/js/categories.dev.js',
'wp-admin/js/editor.dev.js',
'libs/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
'libs/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
'libs/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
'libs/js/plupload/handlers.dev.js',
'libs/js/plupload/wp-plupload.dev.js',
'libs/js/swfupload/handlers.dev.js',
'libs/js/jcrop/jquery.Jcrop.dev.js',
'libs/js/jcrop/jquery.Jcrop.js',
'libs/js/jcrop/jquery.Jcrop.css',
'libs/js/imgareaselect/jquery.imgareaselect.dev.js',
'libs/css/wp-pointer.dev.css',
'libs/css/editor.dev.css',
'libs/css/jquery-ui-dialog.dev.css',
'libs/css/admin-bar-rtl.dev.css',
'libs/css/admin-bar.dev.css',
'libs/js/jquery/ui/jquery.effects.clip.min.js',
'libs/js/jquery/ui/jquery.effects.scale.min.js',
'libs/js/jquery/ui/jquery.effects.blind.min.js',
'libs/js/jquery/ui/jquery.effects.core.min.js',
'libs/js/jquery/ui/jquery.effects.shake.min.js',
'libs/js/jquery/ui/jquery.effects.fade.min.js',
'libs/js/jquery/ui/jquery.effects.explode.min.js',
'libs/js/jquery/ui/jquery.effects.slide.min.js',
'libs/js/jquery/ui/jquery.effects.drop.min.js',
'libs/js/jquery/ui/jquery.effects.highlight.min.js',
'libs/js/jquery/ui/jquery.effects.bounce.min.js',
'libs/js/jquery/ui/jquery.effects.pulsate.min.js',
'libs/js/jquery/ui/jquery.effects.transfer.min.js',
'libs/js/jquery/ui/jquery.effects.fold.min.js',
'wp-admin/images/screenshots/captions-1.png',
'wp-admin/images/screenshots/captions-2.png',
'wp-admin/images/screenshots/flex-header-1.png',
'wp-admin/images/screenshots/flex-header-2.png',
'wp-admin/images/screenshots/flex-header-3.png',
'wp-admin/images/screenshots/flex-header-media-library.png',
'wp-admin/images/screenshots/theme-customizer.png',
'wp-admin/images/screenshots/twitter-embed-1.png',
'wp-admin/images/screenshots/twitter-embed-2.png',
'wp-admin/js/utils.js',
'wp-admin/options-privacy.php',
'wp-app.php',
'libs/class-wp-atom-server.php',
'libs/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
// 3.5.2
'libs/js/swfupload/swfupload-all.js',
// 3.6
'wp-admin/js/revisions-js.php',
'wp-admin/images/screenshots',
'wp-admin/js/categories.js',
'wp-admin/js/categories.min.js',
'wp-admin/js/custom-fields.js',
'wp-admin/js/custom-fields.min.js',
// 3.7
'wp-admin/js/cat.js',
'wp-admin/js/cat.min.js',
'libs/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
// 3.8
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
'libs/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
'libs/js/thickbox/tb-close-2x.png',
'libs/js/thickbox/tb-close.png',
'libs/images/wpmini-blue-2x.png',
'libs/images/wpmini-blue.png',
'wp-admin/css/colors-fresh.css',
'wp-admin/css/colors-classic.css',
'wp-admin/css/colors-fresh.min.css',
'wp-admin/css/colors-classic.min.css',
'wp-admin/js/about.min.js',
'wp-admin/js/about.js',
'wp-admin/images/arrows-dark-vs-2x.png',
'wp-admin/images/wp-logo-vs.png',
'wp-admin/images/arrows-dark-vs.png',
'wp-admin/images/wp-logo.png',
'wp-admin/images/arrows-pr.png',
'wp-admin/images/arrows-dark.png',
'wp-admin/images/press-this.png',
'wp-admin/images/press-this-2x.png',
'wp-admin/images/arrows-vs-2x.png',
'wp-admin/images/welcome-icons.png',
'wp-admin/images/wp-logo-2x.png',
'wp-admin/images/stars-rtl-2x.png',
'wp-admin/images/arrows-dark-2x.png',
'wp-admin/images/arrows-pr-2x.png',
'wp-admin/images/menu-shadow-rtl.png',
'wp-admin/images/arrows-vs.png',
'wp-admin/images/about-search-2x.png',
'wp-admin/images/bubble_bg-rtl-2x.gif',
'wp-admin/images/wp-badge-2x.png',
'wp-admin/images/wordpress-logo-2x.png',
'wp-admin/images/bubble_bg-rtl.gif',
'wp-admin/images/wp-badge.png',
'wp-admin/images/menu-shadow.png',
'wp-admin/images/about-globe-2x.png',
'wp-admin/images/welcome-icons-2x.png',
'wp-admin/images/stars-rtl.png',
'wp-admin/images/wp-logo-vs-2x.png',
'wp-admin/images/about-updates-2x.png',
// 3.9
'wp-admin/css/colors.css',
'wp-admin/css/colors.min.css',
'wp-admin/css/colors-rtl.css',
'wp-admin/css/colors-rtl.min.css',
'wp-admin/css/media-rtl.min.css',
'wp-admin/css/media.min.css',
'wp-admin/css/farbtastic-rtl.min.css',
'wp-admin/images/lock-2x.png',
'wp-admin/images/lock.png',
'wp-admin/js/theme-preview.js',
'wp-admin/js/theme-install.min.js',
'wp-admin/js/theme-install.js',
'wp-admin/js/theme-preview.min.js',
'libs/js/plupload/plupload.html4.js',
'libs/js/plupload/plupload.html5.js',
'libs/js/plupload/changelog.txt',
'libs/js/plupload/plupload.silverlight.js',
'libs/js/plupload/plupload.flash.js',
'libs/js/plupload/plupload.js',
'libs/js/tinymce/plugins/spellchecker',
'libs/js/tinymce/plugins/inlinepopups',
'libs/js/tinymce/plugins/media/js',
'libs/js/tinymce/plugins/media/css',
'libs/js/tinymce/plugins/wordpress/img',
'libs/js/tinymce/plugins/wpdialogs/js',
'libs/js/tinymce/plugins/wpeditimage/img',
'libs/js/tinymce/plugins/wpeditimage/js',
'libs/js/tinymce/plugins/wpeditimage/css',
'libs/js/tinymce/plugins/wpgallery/img',
'libs/js/tinymce/plugins/wpfullscreen/css',
'libs/js/tinymce/plugins/paste/js',
'libs/js/tinymce/themes/advanced',
'libs/js/tinymce/tiny_mce.js',
'libs/js/tinymce/mark_loaded_src.js',
'libs/js/tinymce/wp-tinymce-schema.js',
'libs/js/tinymce/plugins/media/editor_plugin.js',
'libs/js/tinymce/plugins/media/editor_plugin_src.js',
'libs/js/tinymce/plugins/media/media.htm',
'libs/js/tinymce/plugins/wpview/editor_plugin_src.js',
'libs/js/tinymce/plugins/wpview/editor_plugin.js',
'libs/js/tinymce/plugins/directionality/editor_plugin.js',
'libs/js/tinymce/plugins/directionality/editor_plugin_src.js',
'libs/js/tinymce/plugins/wordpress/editor_plugin.js',
'libs/js/tinymce/plugins/wordpress/editor_plugin_src.js',
'libs/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
'libs/js/tinymce/plugins/wpdialogs/editor_plugin.js',
'libs/js/tinymce/plugins/wpeditimage/editimage.html',
'libs/js/tinymce/plugins/wpeditimage/editor_plugin.js',
'libs/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
'libs/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
'libs/js/tinymce/plugins/fullscreen/fullscreen.htm',
'libs/js/tinymce/plugins/fullscreen/editor_plugin.js',
'libs/js/tinymce/plugins/wplink/editor_plugin_src.js',
'libs/js/tinymce/plugins/wplink/editor_plugin.js',
'libs/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
'libs/js/tinymce/plugins/wpgallery/editor_plugin.js',
'libs/js/tinymce/plugins/tabfocus/editor_plugin.js',
'libs/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
'libs/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
'libs/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
'libs/js/tinymce/plugins/paste/editor_plugin.js',
'libs/js/tinymce/plugins/paste/pasteword.htm',
'libs/js/tinymce/plugins/paste/editor_plugin_src.js',
'libs/js/tinymce/plugins/paste/pastetext.htm',
'libs/js/tinymce/langs/wp-langs.php',
// 4.1
'libs/js/jquery/ui/jquery.ui.accordion.min.js',
'libs/js/jquery/ui/jquery.ui.autocomplete.min.js',
'libs/js/jquery/ui/jquery.ui.button.min.js',
'libs/js/jquery/ui/jquery.ui.core.min.js',
'libs/js/jquery/ui/jquery.ui.datepicker.min.js',
'libs/js/jquery/ui/jquery.ui.dialog.min.js',
'libs/js/jquery/ui/jquery.ui.draggable.min.js',
'libs/js/jquery/ui/jquery.ui.droppable.min.js',
'libs/js/jquery/ui/jquery.ui.effect-blind.min.js',
'libs/js/jquery/ui/jquery.ui.effect-bounce.min.js',
'libs/js/jquery/ui/jquery.ui.effect-clip.min.js',
'libs/js/jquery/ui/jquery.ui.effect-drop.min.js',
'libs/js/jquery/ui/jquery.ui.effect-explode.min.js',
'libs/js/jquery/ui/jquery.ui.effect-fade.min.js',
'libs/js/jquery/ui/jquery.ui.effect-fold.min.js',
'libs/js/jquery/ui/jquery.ui.effect-highlight.min.js',
'libs/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
'libs/js/jquery/ui/jquery.ui.effect-scale.min.js',
'libs/js/jquery/ui/jquery.ui.effect-shake.min.js',
'libs/js/jquery/ui/jquery.ui.effect-slide.min.js',
'libs/js/jquery/ui/jquery.ui.effect-transfer.min.js',
'libs/js/jquery/ui/jquery.ui.effect.min.js',
'libs/js/jquery/ui/jquery.ui.menu.min.js',
'libs/js/jquery/ui/jquery.ui.mouse.min.js',
'libs/js/jquery/ui/jquery.ui.position.min.js',
'libs/js/jquery/ui/jquery.ui.progressbar.min.js',
'libs/js/jquery/ui/jquery.ui.resizable.min.js',
'libs/js/jquery/ui/jquery.ui.selectable.min.js',
'libs/js/jquery/ui/jquery.ui.slider.min.js',
'libs/js/jquery/ui/jquery.ui.sortable.min.js',
'libs/js/jquery/ui/jquery.ui.spinner.min.js',
'libs/js/jquery/ui/jquery.ui.tabs.min.js',
'libs/js/jquery/ui/jquery.ui.tooltip.min.js',
'libs/js/jquery/ui/jquery.ui.widget.min.js',
'libs/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
// 4.3
'wp-admin/js/wp-fullscreen.js',
'wp-admin/js/wp-fullscreen.min.js',
'libs/js/tinymce/wp-mce-help.php',
'libs/js/tinymce/plugins/wpfullscreen',
);

/**
 * Stores new files in wp-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to wp-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.4.0 New themes are not automatically installed on upgrade.
 *              This can still be explicitly asked for by defining
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as false.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'       => '2.0',
	'themes/twentyten/'      => '3.0',
	'themes/twentyeleven/'   => '3.2',
	'themes/twentytwelve/'   => '3.5',
	'themes/twentythirteen/' => '3.6',
	'themes/twentyfourteen/' => '3.8',
	'themes/twentyfifteen/'  => '4.1',
	'themes/twentysixteen/'  => '4.4',
);

// If not explicitly defined as false, don't install new default themes.
if ( ! defined( 'CORE_UPGRADE_SKIP_NEW_BUNDLED' ) || CORE_UPGRADE_SKIP_NEW_BUNDLED ) {
	$_new_bundled_files = array( 'plugins/akismet/' => '2.0' );
}

/**
 * Upgrade the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the {@link $_old_files} list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the {@link $_new_bundled_files} list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than wp-content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global WP_Filesystem_Base $wp_filesystem
 * @global array              $_old_files
 * @global array              $_new_bundled_files
 * @global wpdb               $wpdb
 * @global string             $wp_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old WordPress installation.
 * @return WP_Error|null WP_Error on failure, null on success.
 */
function update_core($from, $to) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	@set_time_limit( 300 );

	/**
	 * Filter feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . 'libs/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __('The update could not be unpacked') );
	}


	/**
	 * Import $wp_version, $required_php_version, and $required_mysql_version from the new version
	 * $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	 *
	 * @global string $wp_version
	 * @global string $required_php_version
	 * @global string $required_mysql_version
	 */
	global $wp_version, $required_php_version, $required_mysql_version;

	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . 'libs/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'libs/version.php' );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require( WP_CONTENT_DIR . '/upgrade/version-current.php' );
	$wp_filesystem->delete( $versions_file );

	$php_version    = phpversion();
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $wp_version; // The version of WordPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
	$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );

	if ( !$mysql_compat || !$php_compat )
		$wp_filesystem->delete($from, true);

	if ( !$mysql_compat && !$php_compat )
		return new WP_Error( 'php_mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.'), $wp_version, $required_php_version, $required_mysql_version, $php_version, $mysql_version ) );
	elseif ( !$php_compat )
		return new WP_Error( 'php_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.'), $wp_version, $required_php_version, $php_version ) );
	elseif ( !$mysql_compat )
		return new WP_Error( 'mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.'), $wp_version, $required_mysql_version, $mysql_version ) );

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy wp-content, we'll deal with that below
	// We also copy version.php last so failed updates report their old version
	$skip = array( 'wp-content', 'libs/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );
		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) )
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2
		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				if ( 'wp-content' == substr( $file, 0, 10 ) )
					continue;
				if ( ! file_exists( ABSPATH . $file ) )
					continue;
				if ( ! file_exists( $working_dir_local . $file ) )
					continue;
				if ( md5_file( ABSPATH . $file ) === $checksum )
					$skip[] = $file;
				else
					$check_is_writable[ $file ] = ABSPATH . $file;
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );
		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );
			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );
				if ( $wp_filesystem->is_writable( $file_not_writable ) )
					unset( $files_not_writable[ $relative_file_not_writable ] );
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable )
				return new WP_Error( 'files_not_writable', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), implode( ', ', $error_data ) );
		}
	}

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );
	// Create maintenance file to signal that we are upgrading
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file = $to . '.maintenance';
	$wp_filesystem->delete($maintenance_file);
	$wp_filesystem->put_contents($maintenance_file, $maintenance_string, FS_CHMOD_FILE);

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );
	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );
	if ( is_wp_error( $result ) )
		$result = new WP_Error( $result->get_error_code(), $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );

	// Since we know the core files have copied over, we can now copy the version file
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'libs/version.php', $to . 'libs/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'libs/version.php' );
		}
		$wp_filesystem->chmod( $to . 'libs/version.php', FS_CHMOD_FILE );
	}

	// Check to make sure everything copied correctly, ignoring the contents of wp-content
	$skip = array( 'wp-content' );
	$failed = array();
	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'wp-content' == substr( $file, 0, 10 ) )
				continue;
			if ( ! file_exists( $working_dir_local . $file ) )
				continue;
			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) == $checksum )
				$skip[] = $file;
			else
				$failed[] = $file;
		}
	}

	// Some files didn't copy properly
	if ( ! empty( $failed ) ) {
		$total_size = 0;
		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) )
				$total_size += filesize( $working_dir_local . $file );
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );
		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );
			if ( is_wp_error( $result ) )
				$result = new WP_Error( $result->get_error_code() . '_retry', $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
		}
	}

	// Custom Content Directory needs updating now.
	// Copy Languages
	if ( !is_wp_error($result) && $wp_filesystem->is_dir($from . $distro . 'wp-content/languages') ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir(WP_LANG_DIR) )
			$lang_dir = WP_LANG_DIR;
		else
			$lang_dir = WP_CONTENT_DIR . '/languages';

		if ( !@is_dir($lang_dir) && 0 === strpos($lang_dir, ABSPATH) ) { // Check the language directory exists first
			$wp_filesystem->mkdir($to . str_replace(ABSPATH, '', $lang_dir), FS_CHMOD_DIR); // If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			clearstatcache(); // for FTP, Need to clear the stat cache
		}

		if ( @is_dir($lang_dir) ) {
			$wp_lang_dir = $wp_filesystem->find_folder($lang_dir);
			if ( $wp_lang_dir ) {
				$result = copy_dir($from . $distro . 'wp-content/languages/', $wp_lang_dir);
				if ( is_wp_error( $result ) )
					$result = new WP_Error( $result->get_error_code() . '_languages', $result->get_error_message(), substr( $result->get_error_data(), strlen( $wp_lang_dir ) ) );
			}
		}
	}

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );
	// Remove maintenance file, we're done with potential site-breaking changes
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' == $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )  ) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	// Copy New bundled plugins & themes
	// This gives us the ability to install new plugins & themes bundled with future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	// $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated
	if ( !is_wp_error($result) && ( ! defined('CORE_UPGRADE_SKIP_NEW_BUNDLED') || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ('/' == $file[ strlen($file)-1 ]);
				list($type, $filename) = explode('/', $file, 2);

				// Check to see if the bundled items exist before attempting to copy them
				if ( ! $wp_filesystem->exists( $from . $distro . 'wp-content/' . $file ) )
					continue;

				if ( 'plugins' == $type )
					$dest = $wp_filesystem->wp_plugins_dir();
				elseif ( 'themes' == $type )
					$dest = trailingslashit($wp_filesystem->wp_themes_dir()); // Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2
				else
					continue;

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) )
						continue;

					if ( ! $wp_filesystem->copy($from . $distro . 'wp-content/' . $file, $dest . $filename, FS_CHMOD_FILE) )
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) )
						continue;

					$wp_filesystem->mkdir($dest . $filename, FS_CHMOD_DIR);
					$_result = copy_dir( $from . $distro . 'wp-content/' . $file, $dest . $filename);

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) )
							$result = new WP_Error;
						$result->add( $_result->get_error_code() . "_$type", $_result->get_error_message(), substr( $_result->get_error_data(), strlen( $dest ) ) );
					}
				}
			}
		} //end foreach
	}

	// Handle $result error from the above blocks
	if ( is_wp_error($result) ) {
		$wp_filesystem->delete($from, true);
		return $result;
	}

	// Remove old files
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( !$wp_filesystem->exists($old_file) )
			continue;
		$wp_filesystem->delete($old_file, true);
	}

	// Remove any Genericons example.html's from the filesystem
	_upgrade_422_remove_genericons();

	// Remove the REST API plugin if its version is Beta 4 or lower
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Upgrade DB with separate request
	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );
	$db_upgrade_url = admin_url('upgrade.php?step=upgrade_db');
	wp_remote_post($db_upgrade_url, array('timeout' => 60));

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache
	wp_cache_flush();
	// (Not all cache backends listen to 'flush')
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory
	$wp_filesystem->delete($from, true);

	// Force refresh of update information
	if ( function_exists('delete_site_transient') )
		delete_site_transient('update_core');
	else
		delete_option('update_core');

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) )
		delete_site_option( 'auto_core_update_failed' );

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a temporary function for the 3.1 -> 3.2 upgrade, as well as for those upgrading to
 * 3.7+
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list
 * @see copy_dir()
 *
 * @global WP_Filesystem_Base $wp_filesystem
 *
 * @param string $from     source directory
 * @param string $to       destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function _copy_dir($from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist($from);

	$from = trailingslashit($from);
	$to = trailingslashit($to);

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list ) )
			continue;

		if ( 'f' == $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) )
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
			}
		} elseif ( 'd' == $fileinfo['type'] ) {
			if ( !$wp_filesystem->is_dir($to . $filename) ) {
				if ( !$wp_filesystem->mkdir($to . $filename, FS_CHMOD_DIR) )
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();
			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) )
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
			}

			$result = _copy_dir($from . $filename, $to . $filename, $sub_skip_list);
			if ( is_wp_error($result) )
				return $result;
		}
	}
	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing install is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version
 * @global string $pagenow
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) )
		return;

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' != $pagenow )
		return;

 	if ( 'do-core-upgrade' != $action && 'do-core-reinstall' != $action )
 		return;

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade()
	show_message( __('WordPress updated successfully') );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message( '<span class="hide-if-no-js">' . sprintf( __( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	show_message( '<span class="hide-if-js">' . sprintf( __( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	include(ABSPATH . 'wp-admin/admin-footer.php');
	exit();
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $wp_theme_directories
 * @global WP_Filesystem_Base $wp_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $wp_theme_directories, $wp_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes
	foreach ( $wp_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( WP_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $wp_filesystem->find_folder( trailingslashit( dirname( $file ) ) );
		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via WP_Filesystem may differ in the case of FTP
		$remote_file = $gen_dir . basename( $file );

		if ( ! $wp_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $wp_filesystem->delete( $remote_file, false, 'f' ) ) {
			$wp_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" ) && false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' ) ) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );
	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}

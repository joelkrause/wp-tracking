'use strict';
(function ($) {
    $(function () {
        if ($('#wp_track_before_body').length) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone(wp.codeEditor.defaultSettings) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2
                }
            );
            var editor = wp.codeEditor.initialize($('#wp_track_before_body'), editorSettings);
        }

        if ($('#wp_track_head').length) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone(wp.codeEditor.defaultSettings) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    // mode: 'javascript',
                }
            );
            var editor = wp.codeEditor.initialize($('#wp_track_head'), editorSettings);
        }

        if ($('#wp_track_after_body').length) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone(wp.codeEditor.defaultSettings) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    // mode: 'css',
                }
            );
            var editor = wp.codeEditor.initialize($('#wp_track_after_body'), editorSettings);
        }
    });
})(jQuery);
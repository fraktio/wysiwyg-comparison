(function() {

    var originalContent;

    Wysiwyg = {

        reset: function() {
            window.localStorage.removeItem('lussogrande');
            this.setEditorContent(originalContent);
            console.log("Content was cleared");
        },

        load: function() {
            var content = window.localStorage.getItem('lussogrande');
            console.log("Content was loaded");
            return content;
        },

        save: function(content) {
            window.localStorage.setItem('lussogrande', content);
            console.log("Content was saved");
        },

        setEditorContent: function(content) {
            $(".editable").html(content);
        }
    };

    $(document).ready(function() {

        $(".wysiwyg-reset").click(function() {
            Wysiwyg.reset();
        });

        originalContent = $(".editable").html();

        var content = Wysiwyg.load();
        if (content) {
            $(".editable").html(content);
        }

    });

})();


(function () {
        "use strict";
    
        // SummerNote Init @v1.0
        function SummerNote() {
            var basic = document.querySelectorAll('.summernote-basic');
            if (basic.length > 0) {
                basic.forEach(function (element) {
                    new Quill(element, {
                        placeholder: 'Hello stand alone ui',
                        tabsize: 2,
                        height: 120,
                        modules: {
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'strikethrough', 'clear']],
                                ['font', ['superscript', 'subscript']],
                                ['color', ['color']],
                                ['fontsize', ['fontsize', 'height']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                            ]
                        }
                    });
                });
            }
    
            var minimal = document.querySelectorAll('.summernote-minimal');
            if (minimal.length > 0) {
                minimal.forEach(function (element) {
                    new Quill(element, {
                        placeholder: 'Hello stand alone ui',
                        tabsize: 2,
                        height: 120,
                        modules: {
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['view', ['fullscreen']]
                            ]
                        }
                    });
                });
            }
        }
    
        // Tinymce Init @v1.0
        function Tinymce() {
            var tinymce_basic = document.querySelectorAll('.tinymce-basic');
            if (tinymce_basic.length > 0) {
                tinymce_basic.forEach(function (element) {
                    tinymce.init({
                        selector: element,
                        content_css: true,
                        skin: false,
                        branding: false
                    });
                });
            }
    
            var tinymce_menubar = document.querySelectorAll('.tinymce-menubar');
            if (tinymce_menubar.length > 0) {
                tinymce_menubar.forEach(function (element) {
                    tinymce.init({
                        selector: element,
                        content_css: true,
                        skin: false,
                        branding: false,
                        toolbar: false
                    });
                });
            }
    
            var tinymce_toolbar = document.querySelectorAll('.tinymce-toolbar');
            if (tinymce_toolbar.length > 0) {
                tinymce_toolbar.forEach(function (element) {
                    tinymce.init({
                        selector: element,
                        content_css: true,
                        skin: false,
                        branding: false,
                        menubar: false
                    });
                });
            }
    
            var tinymce_inline = document.querySelectorAll('.tinymce-inline');
            if (tinymce_inline.length > 0) {
                tinymce_inline.forEach(function (element) {
                    tinymce.init({
                        selector: element,
                        content_css: false,
                        skin: false,
                        branding: false,
                        menubar: false,
                        inline: true,
                        toolbar: [
                            'undo redo | bold italic underline | fontselect fontsizeselect',
                            'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent'
                        ]
                    });
                });
            }
        }
    
        // Quill Init @v1.0
        function QuillInit() {
            var basic = document.querySelectorAll('.quill-basic');
            if (basic.length > 0) {
                basic.forEach(function (element) {
                    new Quill(element, {
                        modules: {
                            toolbar: [
                                ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                                ['blockquote', 'code-block'],
                                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                                [{ 'script': 'sub' }, { 'script': 'super' }], // superscript/subscript
                                [{ 'indent': '-1' }, { 'indent': '+1' }], // outdent/indent
                                [{ 'header': [1, 2, 3, 4, 5, 6] }],
                                [{ 'color': [] }, { 'background': [] }], // dropdown with defaults from theme
                                [{ 'font': [] }],
                                [{ 'align': [] }],
                                ['clean'] // remove formatting button
                            ]
                        },
                        theme: 'snow'
                    });
                });
            }
    
            var minimal = document.querySelectorAll('.quill-minimal');
            if (minimal.length > 0) {
                minimal.forEach(function (element) {
                    new Quill(element, {
                        modules: {
                            toolbar: [
                                ['bold', 'italic', 'underline'], // toggled buttons
                                ['blockquote', { 'list': 'bullet' }],
                                [{ 'header': 1 }, { 'header': 2 }, { 'header': [3, 4, 5, 6, false] }],
                                [{ 'align': [] }],
                                ['clean'] // remove formatting button
                            ]
                        },
                        theme: 'snow'
                    });
                });
            }
        }
    
        // Editor Init @v1
        function EditorInit() {
            SummerNote();
            Tinymce();
            QuillInit();
        }
    
        document.addEventListener('DOMContentLoaded', EditorInit);
    })();
    
import { Editor } from 'https://esm.sh/@tiptap/core@2.6.6';
import StarterKit from 'https://esm.sh/@tiptap/starter-kit@2.6.6';
import Highlight from 'https://esm.sh/@tiptap/extension-highlight@2.6.6';
import Underline from 'https://esm.sh/@tiptap/extension-underline@2.6.6';
import TextAlign from 'https://esm.sh/@tiptap/extension-text-align@2.6.6';
import HorizontalRule from 'https://esm.sh/@tiptap/extension-horizontal-rule@2.6.6';
import TextStyle from 'https://esm.sh/@tiptap/extension-text-style@2.6.6';

window.addEventListener('load', function () {
    const editorElement = document.getElementById('wysiwyg-example');
    const hiddenInput = document.getElementById('editor-content');

    // if hidden input Value is empty, set default value
    if (hiddenInput.value === '') {
        hiddenInput.value = `<p>Masukan konten disini...</p><small>Tekan CTRL + ENTER untuk menambahkan paragraf baru</small>`;
    }

    if (editorElement) {

        const FontSizeTextStyle = TextStyle.extend({
            addAttributes() {
                return {
                    fontSize: {
                        default: null,
                        parseHTML: element => element.style.fontSize,
                        renderHTML: attributes => {
                            if (!attributes.fontSize) {
                                return {};
                            }
                            return { style: 'font-size: ' + attributes.fontSize };
                        },
                    },
                };
            },
        });

        // TipTap editor setup
        const editor = new Editor({
            element: editorElement,
            extensions: [
                StarterKit,
                Highlight,
                Underline,
                TextAlign.configure({
                    types: ['heading', 'paragraph'],
                }),
                HorizontalRule,
                TextStyle,
                FontSizeTextStyle,
            ],
            content: hiddenInput.value || '<p>Your initial content goes here...</p>',
            editorProps: {
                attributes: {
                    class: 'format lg:format-lg dark:format-invert focus:outline-none format-blue max-w-none',
                },
            }
        });

        // Update hidden input when content changes
        editor.on('update', () => {
            hiddenInput.value = editor.getHTML();
        });

        // Button event listeners (similar to your previous code)
        document.getElementById('toggleBoldButton').addEventListener('click', () => editor.chain().focus().toggleBold().run());
        document.getElementById('toggleItalicButton').addEventListener('click', () => editor.chain().focus().toggleItalic().run());
        document.getElementById('toggleUnderlineButton').addEventListener('click', () => editor.chain().focus().toggleUnderline().run());
        document.getElementById('toggleStrikeButton').addEventListener('click', () => editor.chain().focus().toggleStrike().run());
        document.getElementById('toggleHighlightButton').addEventListener('click', () => editor.chain().focus().toggleHighlight({ color: '#ffc078' }).run());

        // Alignment buttons
        document.getElementById('toggleLeftAlignButton').addEventListener('click', () => {
            editor.chain().focus().setTextAlign('left').run();
        });
        document.getElementById('toggleCenterAlignButton').addEventListener('click', () => {
            editor.chain().focus().setTextAlign('center').run();
        });
        document.getElementById('toggleRightAlignButton').addEventListener('click', () => {
            editor.chain().focus().setTextAlign('right').run();
        });
    }
});

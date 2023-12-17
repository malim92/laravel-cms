<template>
  <EditorContent :editor="editor" />
</template>

<script setup>
import { useEditor, EditorContent } from "@tiptap/vue-3";
import StarterKit from "@tiptap/starter-kit";

const editor = useEditor({
  extensions: [StarterKit],
  editorProps: {
    attributes: {
      class: "Editor",
    },
  },
  content: ``,
});
</script>

<template>
  <div>
    <lit-base-field :field="field">
      <!-- ... -->
    </lit-base-field>
    <editor
        api-key="no-api-key"
        :init="{
         height: 500,
         menubar: false,
         plugins: [
           'advlist autolink lists link image charmap print preview anchor',
           'searchreplace visualblocks code fullscreen',
           'insertdatetime media table paste code help wordcount'
         ],
         toolbar:
           'undo redo | formatselect | bold italic backcolor | \
           alignleft aligncenter alignright alignjustify | \
           bullist numlist outdent indent | removeformat | help'
       }"
    />
  </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
  name: 'TinyMCEField',
  components: {
    'editor': Editor
  },
  props: {
    field: {
      required: true,
      type: Object
    },
    value: {
      required: true
    }
  },
  methods: {
    update(value) {
      this.$emit('input', value)
    }
  }
};
</script>
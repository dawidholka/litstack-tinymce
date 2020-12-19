import Lit from '../vendor/litstack/litstack/resources/js/common/lit';
import TinyMCEField from "./TinyMCEField";

Lit.booting((Vue) => {
    Vue.component('tinymce-field', TinyMCEField);
});
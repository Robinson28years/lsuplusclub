<template>
    <div class="markdown" v-html="rawHtml"></div>
</template>

<script>
var marked = require('marked');
    export default {
        props: {
            body: {
                type: Object,
                default() {
                    return null
                }
            }
        },
        data() {
            return {
                rawHtml: ''
            }
        },
        created() {
            this.rawHtml = marked(this.body.raw)
        }
    }
</script>

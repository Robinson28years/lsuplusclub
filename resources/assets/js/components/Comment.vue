<template>
	<div>
<slot></slot>
</div>
</template>

<script>

</script>

<style scoped>
    i {
        margin-right: 5px;
    }
    .operate {
        font-size: 16px;
    }
    .operate a {
        margin-right: 5px;
        text-decoration: none;
    }
    .none {
        color: #c5c5c5;
        font-size: 16px;
    }
    .comment .img-circle {
        width: 64px;
        height: 64px;
        -webkit-transition: transition .6s ease-in;
        -moz-transition: transition .6s ease-in;
        transition: transform .6s ease-in;
    }
    .comment .media-left:hover img, .media-right:hover img{
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
    }
    .comment .media {
        padding-top: 20px;
    }
    @media screen and (max-width: 767px) {
        .comment .media-left {
            display: none;
        }
        .own-avatar {
            display: none;
        }
    }
    .comment .box-body {
        border: 1px solid #ECF0F1;
        border-radius: 5px;
        background-color: #fff;
        color: #7F8C8D;
    }
    .comment .heading {
        padding: 10px 20px;
        background: #ECF0F1;
    }
    .comment-body {
        padding: 30px 50px;
        color: #34495e;
    }
    .comment-body a {
        color: #1abc9c;
    }
    .comment .comment-editor {
        margin-top: 40px;
    }
    .comment .footing {
        padding: 10px 20px;
        border-top: 1px dashed #e1e1e1;
    }
</style>

<template>
    <div class="media">
        <like-button :feedback="feedback" v-if="feedback.likedByCurrentUser === false && feedback.canBeLikedByCurrentUser === true"></like-button>

        <div class="media-left">
            <img class="media-object" v-bind:src="feedback.user.avatar">
        </div>
        <div class="media-body">
            <strong>{{ feedback.user.name }}</strong>
            <p>{{ feedback.body }}</p>
            <p>{{ feedback.likeCount }} {{ pluralize('like', feedback.likeCount) }}</p>
        </div>
    </div>
</template>

<script>
    import pluralize from 'pluralize'
    import LikeButton from './LikeButton.vue'
    export default {
        props: [
            'feedback'
        ],
        components: [
            LikeButton
        ],
        methods: {
            pluralize
        }
    }
</script>

<style scoped>
    .media {
        position: relative;
        margin: 0;
        padding: 10px;
    }
    .media:hover .like {
        display: block;
    }
</style>
<template>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Your feedback</div>

                <div class="panel-body">
                    <feedback-form></feedback-form>
                    <hr>
                    <feedback v-for="feedback in feedbacks" :feedback="feedback"></feedback>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import eventHub from '../event'
    import Feedback from './Feedback.vue'
    import FeedbackForm from './FeedbackForm.vue'
    export default {
        data(){
            return {
                 feedbacks: []
            }
        },
        components: [
            Feedback, FeedbackForm
        ],
        methods: {
            addFeedback(feedback){
                this.feedbacks.unshift(feedback)
            },
            likeFeedback(feedbackId){
                var i
                for(i=0; i<=this.feedbacks.length; i++){
                    if(this.feedbacks[i].id == feedbackId){
                        this.feedbacks[i].likeCount++
                        this.feedbacks[i].likedByCurrentUser = true
                        break;
                    }
                }
            }
        },
        mounted() {
            eventHub.$on('feedback-added', this.addFeedback)
            eventHub.$on('feedback-liked', this.likeFeedback)
            this.$http.get('/feedbacks').then((response) => {
                //name of channel: feedbacks
                Echo.private('feedbacks').listen('FeedbackWasCreated', (e) => {
                    //console.log(e)
                    eventHub.$emit('feedback-added', e.feedback)
                });
                this.feedbacks = response.body
                //console.log(response.body)
            })
        }
    }
</script>
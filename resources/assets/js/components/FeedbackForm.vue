<template>
	<form action="#" class="form-vertical" @submit.prevent="feedback">
		<div class="form-group">
			<textarea class="form-control" cols="30" rows="3" placeholder="Feedback Fiesta" v-model="body"></textarea>
		</div>
		<button type="submit" class="btn btn-warning pull-left">Post it!</button><br>
	</form>
</template>

<script>
	import eventHub from '../event'
	export default {
		data(){
			return {
				body: null
			}
		},
		methods: {
			feedback () {
				//console.log('feedback')
				this.$http.post('/feedbacks', {
					body: this.body
				}).then((response) => {
					//emit event
					eventHub.$emit('feedback-added', response.body)
					//commentary
					this.body = null
				});
			}
		}
	}
</script>
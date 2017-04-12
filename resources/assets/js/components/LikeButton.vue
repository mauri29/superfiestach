<template>
	<div class="like">
		<a href="#" class="btn btn-info like__button" @click.prevent="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a>
	</div>
</template>

<script>
	import eventHub from '../event'
	export default {
		props: [
			'feedback'
		],
		methods: {
			like() {
				this.$http.post('/feedbacks/' + this.feedback.id + '/likes').then((response) => {
					eventHub.$emit('feedback-liked', this.feedback.id)
				})
			}
		}
	}
</script>

<style scoped>
	.like {
		/*display: none;*/
		position: absolute;
		width: 100%;
		height:100%;
		top: 0; left: 0;
		background: rgba(0,0,0,0.05);
		border-radius: 3px;
		box-sizing: border-box;
	}

	.like__button {
		position: absolute;
		top: 50%;
		right: 20px;
		transform: translate(0, -50%);
	}
</style>
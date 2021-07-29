<!DOCTYPE html>
<html>
<head>
	<title>Client</title>
</head>
<body>
	<main id="app">

		<div v-for="article in articles">
			<div v-text="article.title"></div>
			<div v-text="article.body"></div>
			Publised At <span v-text="article.published"></span>
			<hr>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>

	<script type="text/javascript">
		let app = new Vue({
			el: '#app',

			data() {
				return {
					articles: [],
				}
			},

			created() {
				this.fetchArticle()
			},

			methods: {
				async fetchArticle() {
					let response = await axios.get("http://127.0.0.1:8000/api/articles");
					this.articles = response.data.data
				}
			}


		})
	</script>
</body>
</html>
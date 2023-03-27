const app = Vue.createApp({
    data: () => ({
        items: null,
        keyword: '',
        message: ''
    }),
    watch: {
        keyword: function (newKeyword, oldKeyword) {
            console.log(newKeyword)
            this.message = 'Waiting for you to stop typing...'
            this.debouncedGetAnswer()
        }
    },
    mounted: function() {
        // this.keyword = 'JavaScript'
        // this.getAnswer()
        this.debouncedGetAnswer = _.debounce(this.getAnswer, 1000)
    },
    methods: {
        getAnswer: function () {
            if (this.keyword === '') {
                console.log('blank')
                this.items = null
                return
            }

            this.message = 'Loading...'
            const vm = this
            const params = { page: 2, per_page: 100, query: this.keyword}
            axios.get('https://qiita.com/api/v2/items', { params})
                .then(
                    function(reponse){
                //   console.log(reponse)
                vm.items = reponse.data
                }
                )
                .catch(
                    function(error){
                    vm.message = 'Error!' + error
                }
                )
                .finally(function() {
                    vm.message = ''
                })
        }
    }
})
app.mount('#app')

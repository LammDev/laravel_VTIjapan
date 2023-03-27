const app = Vue.createApp({
    data: () => ({
        counter: 0,
        message:''
    }),
    methods: {
        // clickHandler: function($event, message) {
        //     // this.counter++;
        //     // console.log(message)
        //     this.message = message
        //     console.log($event)
 
        // }
        clickHandler: function() {
            this.message = new Date().toLocaleTimeString()
 
        }
    }
})
app.mount('#app')

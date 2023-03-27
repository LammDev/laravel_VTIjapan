const app = Vue.createApp({
    data: () => ({
        message1: "v-task for vuejs3",
        message2: 'v-task <span style="color:red;">for vuejs3</span>',
        message: "v-task for vuejs3",
        number: 100,
        ok: false,
        url: 'https://www.google.com'

    }),
    methods: {
        clickHandler: function(event) {
           this.message1 = this.message1.split('').reverse().join('') 
        }
    }
})
app.mount('#app')

const helloComponent = {
    template: '<p>VueJs</p>'
}

const buttonCounter = {
    template: '<div><span>counter: </span><button v-on:click="countUp">{{ count }}</button></div>',
    data: () => ({
        count: 0
    }),
    methods: {
        countUp: function(event) {
            this.count++
        }
    }
}


const app = Vue.createApp({
    data: () => ({

    }),
    components: {
        'hello-component': helloComponent,
        'button-counter': buttonCounter
    }
})

// app.component('hello-component', {
//     template: '<p>VueJs</p>'
// })

app.mount('#app')

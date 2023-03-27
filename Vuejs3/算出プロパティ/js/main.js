const app = Vue.createApp({
    data: () => ({
        message: "v-task for vuejs3",
        basePrice:'',
    }),
    computed: {
        reversedMessage: function(event) {
            return this.message.split('').reverse().join('')
        },
        taxIncludedPrice: {
            get: function() {
                return this.basePrice * 1.1
            },
            set: function(value) {
                this.basePrice = value / 1.1
            }
        },
        computedNumber: function() {
            console.log('computed')
            return Math.random();
        }
    },
    methods: {
        reversedMessageMethod: function (event) {
            return this.message.split('').reverse().join('') 
        },
        methodsNumber: function() {
            console.log('methods')
            return Math.random()
        }
    }
})
app.mount('#app')

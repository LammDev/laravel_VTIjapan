// const app = Vue.createApp({
//     data: () => ({
//         message: "v-task for vuejs3",
//         km: 0,
//         m: 0,
//         firstName:'',
//         lastName:'',
//         fullName:'',
//     }),
//     watch: {
//         // message: function(newValue, oldValue) {
//         //     console.log('new: %s, old: %s', newValue, oldValue)
//         // },
//         // km: function(value){
//         //     console.log(value)
//         //     this.km = value
//         //     this.m = value * 1000
//         // },
//         // m: function(value){
//         //     this.km = value / 1000
//         //     this.m = value
//         // }
//         firstName: function(value) {
//             this.fullName = value + ' ' + this.lastName
//         },
//         lastName: function(value) {
//             this.fullName = this.firstName + ' ' + value
//         }
//     }

// })
// app.mount('#app')
const app = Vue.createApp({
    data: () => ({
        message: "v-task for vuejs3",
        km: 0,
        m: 0,
        firstName:'',
        lastName:'',
        fullName:'',
        colors: [
            { name: 'Red'},
            { name: 'Green'},
            { name: 'Blue'},

        ]
    }),
    // computed: {
    //     fullName: function() {
    //         return this.firstName + ' ' + this.lastName
    //     }
    // },
    watch: {
        colors: {
            handler: function(newValue, oldValue) {
                console.log('Update!')
            },
            deep: true
        }
    },
    methods: {
        onClick: function(event) {
            this.colors[1].name = 'White'
        }
    }
})
app.mount('#app')
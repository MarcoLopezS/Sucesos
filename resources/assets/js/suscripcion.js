var Vue = require('vue');
Vue.use(require('vue-resource'));

var resource;

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('content');

var vm = new Vue({
    el: '#formulario-suscripcion',
    data: {
        enviado: false,
        errors: [],
        loading: '',
        suscripcion: {
            nombres: '',
            apellidos: '',
            dni: '',
            telefono: '',
            email: '',
            direccion: '',
            referencia: '',
        }
    },
    ready: function () {
        resource = this.$resource('/suscripcion');
    },
    methods: {
        guardarSuscripcion: function () {
            this.errors = [];
            this.loading = true;
            resource.save({}, this.suscripcion).then(function (response) {
                this.enviado = true;
                this.loading = false;
                this.suscripcion = { nombres: '', apellidos: '', dni: '', telefono: '', email: '', direccion: '', referencia: '' }
            }, function (response) {
                this.enviado = false;
                this.errors = response.data;
                this.loading = false;
            });
        }
    }
});
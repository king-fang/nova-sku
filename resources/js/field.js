Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-spec', require('./components/IndexField'))
  Vue.component('detail-nova-spec', require('./components/DetailField'))
  Vue.component('form-nova-spec', require('./components/FormField'))
})

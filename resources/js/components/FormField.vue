<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <specs @sku="handleChange" :values="values" :skuName="skuName" :skuChildren="skuChildren" ref="spec"></specs>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import Specs from './Specs'

export default {
    components: {
        Specs
    },
    mixins: [FormField, HandlesValidationErrors],

    data() {
        return {
            skuName: this.field.value.attrs || [],
            skuChildren: this.field.value.attrsValue || [],
            values: this.field.value.values || ''
        }
    },

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            const field = this.field.attribute;
            this.value.items.forEach((item, index) => {
                formData.append(`${field}[items][${index}][productSpec]`,JSON.stringify(item.childProductSpec))
                formData.append(`${field}[items][${index}][productStock]`,item.childProductStock)
                formData.append(`${field}[items][${index}][productCost]`,item.childProductCost)
                formData.append(`${field}[items][${index}][productPrice]`,item.childProductPrice)
                formData.append(`${field}[items][${index}][productImage]`,item.image)
            })
            this.value.attrs.forEach((item, index) => {
                formData.append(`${field}[attrs][${index}][name]`,item.name)
                formData.append(`${field}[attrs][${index}][value]`,item.value)
            })
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>

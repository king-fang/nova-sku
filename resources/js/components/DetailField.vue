<template>
    <panel-item :field="field">
        <SpecDetail slot="value" :value="field.value"/>
    </panel-item>
</template>

<script>
import SpecDetail from './SpecDetail'
export default {
    components: {
        SpecDetail,
    },
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>

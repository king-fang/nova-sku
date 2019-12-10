<template>
    <table class="el-table" style="width:80%">
        <thead>
            <th>规格名称</th>
            <th>销售价</th>
            <th>成本价格</th>
            <th>库存</th>
            <th>图片</th>
        </thead>
        <tbody>
            <tr v-for="val in tableData">
                <td>{{val.productSpec}}</td>
                <td>{{val.productPrice}}</td>
                <td>{{val.productCost}}</td>
                <td>{{val.productStock}}</td>
                <td>
                    <Avatar shape="square" :size="30" :src="val.productImage"></Avatar>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import 'element-ui/lib/theme-chalk/index.css';
    import { Avatar } from 'element-ui';
    export default {
        components:{
            Avatar
        },
        props:['value'],
        name: "SpecDetail",
        data() {
            return {
                tableData:[
                ]
            }
        },
        mounted() {
            this.tableData = this.value.values
        }
    }
</script>

<style scoped>

</style>

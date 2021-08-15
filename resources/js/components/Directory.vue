<template>
<div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" v-model="item.name">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" v-model="item.phone">
    </div>
    <button class="btn btn-success btn-block" @click="save">Save</button>
    <div class="col-md-12 mt-3">
        <h2 class="text-center">Telephone Numbers</h2>
        <ul class="list-group">
            <li class="list-group-item">
                Test Code
                <span class="float-right">
                    <button class="btn btn-warning btn-sm mr-2">View</button>
                    <button class="btn btn-danger btn-sm mr-2">Delete</button>
                </span>
            </li>
        </ul>
    </div>
</div>
</template>

<script>
    export default {
        name:"Directory",
        data(){
            return {
                lists: [],
                item: {
                    name:"",
                    phone:""
                }
            }
        },
        // mounted() {
        //     this.fetchAll();
        // },
        methods: {
            // fetchAll(){
            //     axios.get('/api/tel')
            //     .then(res => console.log(res))
            // },
            save(){
                try{
                    axios.post('/api/tel',this.item)
                    .then(res => {
                        console.log(res) 
                    })
                } catch(e){
                    console.log(e)
                }
            }   
        }
    }
</script>
<style scoped>

</style>
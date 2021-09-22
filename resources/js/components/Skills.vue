<template>

    <div class="card bg-secondary text-white">
        <div class="card-header">
            Skills
        </div>
        <div class="card-body">
            <div v-for="(input, i) in inputs" v-bind:key="i" class="d-flex mb-2 p-0" >
                <div class="col-10">
                    <input  
                        type="text" 
                        class="form-control"
                        name="skills[]" 
                        v-model="inputs[i]"
                    >
                </div>

                <div class="col-2">
                    <button type="button" class="close" aria-label="Close" @click.prevent="remove(i)">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>

            <div>
                <button class="ml-3 btn btn-primary" v-on:click.prevent="add()">add</button>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        props: {
            skills: {
                type: Array,
                default: () => ([]),
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                inputs:this.skills,
            }
        },

        methods:{
            add(){
                this.inputs.push('');
            },
            remove(i){
                this.inputs.splice(i, 1);
            }

        }

    }
</script>

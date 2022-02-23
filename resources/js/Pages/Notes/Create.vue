<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px0">
                                <h3 class="text-lg text-gray-900">Crear una nota</h3>
                                <p class="text-sm text-gray-600">Luego de crear, la podrás editar</p>
                            </div>
                        </div>
                        <div class="md:col-span-2 mt-5 md:mt-0">
                            <div class="shadow bg-white md:rounded-md p-4">
                                <form @submit.prevent="submit">
                                    <label class="block font-medium text-sm text-gray-700" for="">Resumen</label>
                                    <textarea class="form-input w-full rounded-md shadow-sm" v-model="form.excerpt"></textarea>
                                    <label class="block font-medium text-sm text-gray-700" for="">Contenido</label>
                                    <textarea class="form-input w-full rounded-md shadow-sm" rows="8" v-model="form.content"></textarea>
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">Crear</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        /* Esta es la data (información) que se va a manejar en el formulario de la vista Edit */
        data () {
            return {
                /* Variable llamada formulario qeu contiene el extracto y el contenido de la nota */
                form: {
                    /* Se toma el extracto de la nota, como se está creando está vacío */
                    excerpt: '',
                    /* se toma el contenido de la nota, como se está creando está vacío  */
                    content: '',
                }
            }
        },
        /* Aquí iran los métodos que se vaya a utilizar en el script */
        methods: {
            /* Método submit está en el formulario y estae bloque de código se va a ejecutar cuando se ejecute el formulario */
            submit() {
                this.$inertia.post(this.route('notes.store'), this.form)
            }
        }
    }
</script>s
<template>

    <Head title="Portfolio" />
    <AuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Profile</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white text-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>State</th>
                                <th>Pairs</th>
                                <th>Timeframe</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr v-for="item in transactions.data" :key="item.id">
                                <td>{{ item.state.toUpperCase() }}</td>
                                <td>{{ item.pairs }}</td>
                                <td>{{ item.timeframe }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <pagination class="mt-6" :links="transactions.links" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import Pagination from '@/Components/Pagination.vue'
    
    defineProps({
        transactions: Object,
    });

    components: {
        Pagination
    }
</script>

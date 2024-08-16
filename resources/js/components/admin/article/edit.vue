<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Article</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/article">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Article</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select v-model="form.category_id" class="form-control" name="category_id" required>
                                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea v-model="form.description" class="form-control" name="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" v-model="form.meta_title" class="form-control" name="meta_title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <input type="text" v-model="form.meta_description" class="form-control" name="meta_description">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" v-model="form.meta_keywords" class="form-control" name="meta_keywords">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input type="checkbox" v-model="form.status" value="1">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Created By</label>
                                        <input type="number" v-model="form.created_by" class="form-control" name="created_by" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Base>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRouter, useRoute } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const form = ref({
    id: null,
    name: '',
    meta_title: '',
    category_id: null,
    slug: '',
    description: '',
    meta_description: '',
    meta_keywords: '',
    status: false,
    created_by: null
});

const categories = ref([]);
const router = useRouter();
const route = useRoute();

const fetchArticle = async () => {
    try {
        const response = await axios.get(`/api/admin/articles/${route.params.id}`);
        const article = response.data;
        form.value = {
            ...form.value,
            ...article
        };
    } catch (error) {
        console.error('Error fetching article:', error);
    }
};

const fetchCategories = async () => {
    try {
        const response = await axios.get('/api/admin/categories');
        categories.value = response.data;
    } catch (error) {
        console.error('Error fetching categories:', error);
    }
};

const submitForm = async () => {
    try {
        await axios.put(`/api/admin/articles/${form.value.id}`, form.value, {
            headers: {
                'Content-Type': 'application/json'
            }
        });
        router.push('/admin/article');
    } catch (error) {
        if (error.response && error.response.data && error.response.data.errors) {
            console.error('Validation errors:', error.response.data.errors);
        } else {
            console.error('There was an error!', error);
        }
    }
};

onMounted(() => {
    fetchCategories();
    fetchArticle();
});
</script>

<style scoped>
/* Add your styles here if needed */
</style>

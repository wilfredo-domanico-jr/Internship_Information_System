<template>
    <div>
        <h1>This is a Title</h1>

        <table class="table table-hover text-center">
                    <thead class="bg-dark">
                        <tr>
                            <th scope="col" class="text-center">Job Name</th>
                                <th scope="col" class="text-center">Job Description</th>
                                <th scope="col" class="text-center">Vacants</th>
                                <th scope="col" class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sr. Programmer</td>
                            <td>Lead Developers</td>
                            <td>2</td>
                            <td>
                                <button type="button" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" class="form-control">
                            </td>
                            <td>
                                 <input type="text" class="form-control">
                            </td>
                            <td>
                                 <input type="number" min=0 class="form-control">
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                            </td>
                        </tr>
                    </tbody>
        </table>
    </div>

</template>

<script>
export default {

}
</script>
(function ($) {
    $(document).ready(function () {
        //Add Speare Parts Catagory
        $("#spear_parts_cata_btn").click(function () {
            let spm_cata = `<div class="modal fade" id="spm_modal" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header justify-content-between">
                                                    <h4>Add Parts Catagory</h4>
                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <label for="cata_id" class="col-form-label">Spear Parts Catagory</label>
                                                        <input name="spm_cata" class="form-control mb-2" type="text">
                                                    </div>
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Parts Catagory">
                                                </div>
                                        </div>
                                    </div>
                                </div>`;
            $(spm_cata).modal("show");
        });
        //Add Speare Parts Rack Name
        $("#spear_parts_rack_btn").click(function () {
            let spr_cata = `<div class="modal fade" id="spr_modal" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header justify-content-between">
                                                    <h4>Add Rack Name</h4>
                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <label for="rack_id" class="col-md-3 col-form-label">Rack Name</label>
                                                        <input name="rack_name" class="form-control mb-2" type="text">
                                                    </div>
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Rack Name">
                                                </div>
                                         </div>
                                    </div>
                                </div>`;
            $(spr_cata).modal("show");
        });

        //Add Motorcycle Color
        $("#mc_color_btn").click(function () {
            let mc_color = `<div class="modal fade" id="mc_color_modal" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header justify-content-between">
                                                    <h4>Add Motorcycle Color</h4>
                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <label for="cata_id" class="col-form-label">Motorcycle Color</label>
                                                        <input name="mc_color_name" class="form-control mb-2" type="text">
                                                    </div>
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Color">
                                                </div>
                                        </div>
                                    </div>
                                </div>`;
            $(mc_color).modal("show");
        });
        //Add Motorcycle Model
        $("#mc_model_btn").click(function () {
            let mc_model = `<div class="modal fade" id="mc_model_modal" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header justify-content-between">
                                                    <h4>Add Model</h4>
                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <label for="cata_id" class="col-form-label">Model Name</label>
                                                        <input name="mc_model_name" class="form-control mb-2" type="text">
                                                    </div>
                                                    <input class="form-control btn btn-outline-danger" type="submit" value="Add Model">
                                                </div>
                                        </div>
                                    </div>
                                </div>`;
            $(mc_model).modal("show");
        });
    });
})(jQuery);

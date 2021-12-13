<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
// Error
echo validation_errors('<div class="alert alert-success">', '</div>');
?>

<!--  Modals-->
<div class="panel-body">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Saran dan Aduan</th>
                <th>Tanggal</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($keluhans as $list) { ?>
                <tr class="odd gradeX">
                    <td><?php echo $i; ?></td>
                    <td><?php echo substr(strip_tags($list['name']), 0, 30) ?></td>
                    <td><?php echo substr(strip_tags($list['email']), 0, 40) ?></td>

                    <!-- saran read more -->
                    <td>

                        <div class="">
                            <article><?php echo $list['messages'] ?></article>
                        </div>

                    </td>
                    <!-- saran read more end -->
                    <td><?php echo date('l, d/m/Y', strtotime($list['date'])); ?></td>
                    <td class="center">
                        <a href="<?php echo base_url('admin/keluhans/edit_message/' . $list['message_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <!--  Modals-->
                        <button class="btn btn-success" data-toggle="modal" data-target="#View<?php echo $list['message_id']; ?>"><i class="fa fa-eye"></i></button>
                        <div class="modal fade" id="View<?php echo $list['message_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">View Post</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><?php echo $list['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Saran dan Aduan</td>
                                                    <td><?php echo wordwrap($list['messages'], 50, "<br>", true); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Balasan</td>
                                                    <td><?php echo wordwrap($list['reply'], 50, "<br>", true); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date</td>
                                                    <td><?php echo $list['date']; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modals-->
                        <a href="<?php echo base_url('admin/keluhans/delete/' . $list['message_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/readmore-master/readmore.js'); ?> "></script>


    <script>
        $('article').readmore({
            collapsedHeight: 50
        });
    </script>
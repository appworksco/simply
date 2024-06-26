<div class="modal fade" id="viewTicketDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">Ticket Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        
                            
                        <ul class="list-group">
                            <?php
                            // Detalye ng ticket
                            if (isset($_GET['is_show'])) {
                                $ctsId = $_GET['is_show'];
                                $ticketDetails = $ctsFacade->fetchTicketById($ctsId);
                                while ($row = $ticketDetails->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            
                                    <ul class="list-group">
                                        <li class="list-group-item">Ticket No: <?= $row['ticket_no'] ?></li>
                                        
                                        <li class="list-group-item">Requested By: <?= $row['requested_by'] ?></li>
                                        <li class="list-group-item">Department: <?= $row['department'] ?></li>
                                        <li class="list-group-item">Ticket Date: <?= date('F j, Y', strtotime($row["created_at"])) ?></li>
                                        <li class="list-group-item">Time Requested: <?= date('g:i A', strtotime($row["created_at"])) ?></li>
                                        <li class="list-group-item">Issue: <?= $row['issue'] ?></li>
                                        <li class="list-group-item">Description: <?= $row['description'] ?></li>
                                        <li class="list-group-item">Severity: <?= $row['severity'] ?></li>
                                        <?php if (isset($row["assisted_by"]) && !empty($row["assisted_by"])) : ?>
                                            <hr>
                                            <li class="list-group-item">Assisted By: <?= $row['assisted_by'] ?></li>
                                        <?php endif; ?>
                                        <?php if (isset($row["assistors_remark"]) && !empty($row["assistors_remark"])) : ?>
                                            <li class="list-group-item">Assistors Remark: <?= $row['assistors_remark'] ?></li>
                                        <?php endif; ?>
                                        <?php if (isset($row["time_resolved"]) && !empty($row["time_resolved"])) : ?>
                                            <li class="list-group-item">Date Resolved: <?= date('F j, Y', strtotime($row["time_resolved"])) ?></li>
                                            <li class="list-group-item">Time Resolved: <?= date('g:i A', strtotime($row["time_resolved"])) ?></li>
                                        <?php endif; ?>
                                        <li class="list-group-item">Status: <?= $row['status'] ?></li>
                                    </ul>
                                    
                         
                            <?php
                                }
                            } else {
                                echo "Error: Ticket ID not provided.";
                            }
                            ?>
                        </ul>
                            
                        
                    </div>
                    <div class="col-md-6">
                        
                            <?php
                            // Larawan ng ticket
                            if (isset($_GET['is_show'])) {
                                $ctsId = $_GET['is_show'];
                                $ticketDetails = $ctsFacade->fetchTicketById($ctsId);
                                while ($row = $ticketDetails->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <li class="list-group-item" style="display: flex; justify-content: center;">
                                <img src="<?= $row['image'] ?>" alt="They didn't upload an Image" style="max-width: 100%; height: auto;">
                            </li>
                            <?php
                                    // I-check kung ang departamento ay ICT
                                    if ($department == 'ICT') {
                                        // I-check kung hindi pa tapos ang status ng ticket
                                        if ($row["status"] != "Done" && $row["status"] != "Undone") {
                                    ?>
                                            <a href="cts?is_updated=<?= $row["id"] ?>" class="btn btn-sm btn-info d-block mt-2" style="border-radius: 0; padding-top: 10px; padding-bottom: 10px;">Assist</a>
                                    <?php
                                        }
                                    }
                                    ?>
                            <?php
                                }
                            } else {
                                echo "Error: Ticket ID not provided.";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
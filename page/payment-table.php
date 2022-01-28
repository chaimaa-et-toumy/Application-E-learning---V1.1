<?php
    function getStudent(){
        $users = json_decode(file_get_contents('page/user-payment.json'),true);
        return $users;
    }
         $users = getStudent();
?>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead style="border-top: 1px solid #E5E5E5">
            <tr class="text-center">
                <th class="text-secondary">Name</th>
                <th class="text-secondary text-nowrap">Payment Schedule</th>
                <th class="text-secondary text-nowrap">Bill Number</th>
                <th class="text-secondary text-nowrap">Amount Paid</th>
                <th class="text-secondary text-nowrap">Balance amount</th>
                <th class="text-secondary ">Date</th>
            </tr>
        </thead>
        <tbody class="border-top-0">
            <?php
                foreach($users as $user):
            ?>
            <tr class="text-center">
                <td> <?php echo $user['name'] ?> </td>
                <td> <?php echo $user['Payment Schedule'] ?> </td>
                <td> <?php echo $user['Bill Number'] ?> </td>
                <td> <?php echo $user['Amount Paid'] ?> </td>
                <td> <?php echo $user['Balance amount'] ?> </td>
                <td class="text-nowrap"> <?php echo $user['Date'] ?> </td>
                <td><i class="fas fa-eye text-info"></i></td>
            </tr>

            <?php endforeach;?>

        </tbody>
    </table>
</div>    
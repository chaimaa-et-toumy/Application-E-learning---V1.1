
    <?php
    function getStudent(){
        $users = json_decode(file_get_contents('page/user-student.json'),true);
        return $users;
    }
         $users = getStudent();
    ?>       
<di class="table-responsive">
<table class="table mt-2 table-hover overflow-sm-auto">
    <thead style="border-top: 1px solid #E5E5E5">
        <tr style="color: #ACACAC;" class="fw-bold text-center">
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th class="text-nowrap">Enroll Number</th>
            <th class="text-nowrap">Date of admission</th>
            <th style="display: none;">pour accissibilite</th>
            <th style="display: none;">pour accissibilite</th>
       </tr>
    </thead>
    <tbody class="border-top-0">
        <?php foreach ($users as $user) : ?>
            <tr class="bg-white text-center">
                    <td></td>               
                    <td class="align-middle">  <?php echo $user['Name']; ?> </td>
                    <td class="align-middle">  <?php echo $user['Email']; ?></td>
                    <td class="align-middle">  <?php echo $user['Phone']; ?></td>
                    <td class="align-middle">  <?php echo $user['Enroll Number']; ?> </td>
                    <td class="align-middle">  <?php echo $user['Date of admission'] ;?> </td>
                    <td style="cursor: pointer;" class="align-middle">
                    <a href="#"> <i class="fa fa-pen text-info"></i>  </a> </td>
                    <td style="cursor: pointer;" class="align-middle"> <a href="#">  <i class="fa fa-trash text-info"></i> </a> </td>
            </tr>
        <?php endforeach; ?>                         
    </tbody>
    </table>
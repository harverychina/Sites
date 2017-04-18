<?php
include_once('include/config.php');
// 编号
$no = 0;

$sql = "SELECT * FROM `message`";

$rs = $link->query($sql);

include_once('include/header.html');
?>

			<div class="r-content">
				<h2>新闻列表 News List</h2>
				<div class="table-wrap">				
					<table class="table" >
						<thead>
							<tr>
								<th>编号 No</th>
								<th id="cols2">标题 Title</th>
								<th>操作 Option</th>
							</tr>
						</thead>
						<tbody>
						<?php while($row = $rs->fetch_assoc()) { ?>
							<tr>
								<td><?php echo $no = $no + 1; ?></td>
								<td id="cols2"><?php echo $row['title']; ?></td>
								<td>
									<a href="show.php?id=<?php echo $row['id']; ?>" class="update-text">修改</a>
									<a href="del.php?id=<?php echo $row['id']; ?>" class="delete-text">删除</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
            <!--分页-->

<?php include_once('include/footer.html');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($transactions)){
                        foreach($transactions as $transaction){
                            ?>
                            <tr>
                                <td> <?=formatDate($transaction[0]) ?></td>
                                <td><?=$transaction[1] ?></td>
                                <td><?=$transaction[2] ?></td>
                                <td>
                                    <span style="color: <?= $transaction[3] >= 0 ? 'green' : 'red' ?>">
                                        <?= $transaction[3] ?>
                                    </span>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <!-- Your code here -->
                </tr>
                <tr>
                    <!-- Your code here -->
                </tr>
                <tr>
                    <!-- Your code here -->
                </tr>
            </tfoot>
        </table>
    </body>
</html>

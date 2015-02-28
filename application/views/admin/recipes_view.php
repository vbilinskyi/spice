<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="pad">
                <span>Список рецептов</span>
            </div>
            <hr class="hr"/>
            <div class="alert alert-info">
                <a class="add-link" href="<?= base_url('/admin/view/add_recipe/'); ?>"><span>+Добавить</span></a>
            </div>
            <?=$this->load->view('template/search_view');?>
            <?
/*
            echo '<pre>';
            print_r($categories);
            echo '</pre><br/>';


            echo '<pre>';
            print_r($recipes);
            echo '</pre>';
*/
            ?>

            <div class="table">
                <table class="table">
                    <tbody>
                    <? foreach ($recipes as $recipe): ?>
                        <tr>
                            <td width="165">
                                <img width="165" src="<?= $recipe['finish_photo']; ?>" alt="recipe_photo"/>
                            </td>
                            <td width="165" class="text-uppercase"><?= $recipe['title_ru']; ?></td>
                            <td class="text-center xs"><?= rus_date_format($recipe['created_at']); ?>
                                <br/>

                                <div style="font-size: 12px; color: #c9c9c9;">Выпечка, Десерты, Завтраки, Тесто</div>
                            </td>
                            <td>
                                <a rel="recipe" href="<?= base_url('index.php/admin/update/recipe/' . $recipe['id']); ?>">Редактировать</a>
                            </td>
                            <td>
                                <a class="text-danger"
                                   href="<?= base_url('index.php/admin/delete/recipe/' . $recipe['id']); ?>">Удалить</a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
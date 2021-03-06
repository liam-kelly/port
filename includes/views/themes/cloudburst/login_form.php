<?php

/**
 * Copyright ${year} William Caleb Kelly
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
 
 /**
 * Name:        Login Form
 * Description: Form user fills out to login
 * Date:        2/6/14
 * Programmer:  Liam Kelly
 */

?>
<p>
    <img src="/<?php echo $base_dir; ?>/includes/views/themes/<?php echo $theme->dir_name ?>/images/logo.svg" width="200px" /><br />
    <form action="/<?php echo $base_dir; ?>/includes/views/themes/<?php echo $theme->dir_name ?>/login.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" />
        <br />
        <label for="password">Password: </label>
        <input type="password" name="password" />
        <br />
        <input type="submit" value="login" />
    </form>
</p>

<!--modulo/loginPage-->
<div class='sp-login-page' ng-controller="loginFormController">

    <div class='sp-login-box'>

        <div class='logo'>
            <img src="<?php echo LAYOUT_ASSETS; ?>img/logo-light.svg">
        </div><!--logo-->

        <div class="box box-success">

            <!-- form start -->
            <form name="loginForm" novalidate ng-submit="submitted && loginForm.$valid && autenticar(form)">

                <div class="box-body">

                    <div class="form-group">
                        <label>
                            <span>Login</span>
                            <i class="fa fa-sign-in text-success"></i>
                        </label>
                        <input name="login" type="text" ng-model="form.login" 
                               class="form-control" placeholder="admin"
                               maxlength="50" required sp-pattern="/^\w+$/"
                               uib-tooltip="Enter something in this input field to disable this tooltip"
                               tooltip-placement="top"
                               tooltip-trigger="mouseover"
                               tooltip-enable="loginForm.login.$error" />
                    </div>

                    <div class="form-group">
                        <label>
                            <span>Senha</span>
                            <i class="fa fa-unlock text-success"></i>
                        </label>
                        <input type="password" class="form-control" placeholder="**********"
                               ng-model="form.senha" maxlength="50" required
                               data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer text-right">
                    <button type="submit" ng-click="submitted = true" class="btn btn-success">Entrar</button>
                </div>

            </form>

        </div>

        <footer class='callback'>

        </footer>

    </div><!--sp-login-box-->

    <div class="sp-login-footer">

        <div class="copyright">
            &copy; SystemPort Technology Ltda - todos os direitos reservados.
        </div><!--copyright-->

        <div class="versao">
            Versão <b>alpha</b>
        </div><!--versao->
        
    </div><!--sp-login-footer-->

    </div>
# Inception
Цель этого проекта - расширить ваши знания в области системного администрирования с помощью Docker. Вы виртуализируете несколько образов Docker, создав их на своей новой персональной виртуальной машине.


<details>
  <summary>Установка Linux на виртуальную машину</summary>
  > UBUNTU:<br>
   1. <a href="https://ubuntu.ru/get">Скачиваем образ UBUNTU</a> <br>
   2. <a href="https://losst.ru/kak-polzovatsya-virtualbox#2_%D0%A1%D0%BE%D0%B7%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B2%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9_%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D1%8B">Создаем виртуалуальную машину Ubuntu.</a> <br>
  > DEBIAN:<br>
   1. <a href="https://cdimage.debian.org/cdimage/archive/10.12.0/amd64/iso-cd/debian-10.12.0-amd64-xfce-CD-1.iso">Скачиваем образ Debian</a> <br>
   2. <a href="https://poznyaev.ru/debian-v-virualbox/">Создаем виртуалуальную машину Debian.</a>
</details>
<details>
   <summary>Установка прикладных программ</summary>
  1. <a href="https://vitux.com/how-to-install-vim-editor-on-debian/">VIM</a> <br>
  2. <a href="https://www.digitalocean.com/community/tutorials/how-to-install-git-on-debian-10">GIT</a> <br>
  3. <a href="https://ru.stackoverflow.com/questions/51452/%D0%92-linux-debian-%D0%BD%D0%B5%D1%82-%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BD%D0%BE-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D1%8B-make-%D0%9A%D0%B0%D0%BA-%D1%83%D1%81%D1%82%D0%B0%D0%BD%D0%B0%D0%B2%D0%BB%D0%B8%D0%B2%D0%B0%D1%82%D1%8C">MAKE</a> <br>
  4. <a href="https://milq.github.io/enable-sudo-user-account-debian/">SUDO</a> <br>
</details>

##### Добавляем пользователя в группу sudo:
```
su (пароль root)
/sbin/adduser username sudo
```
##### Меняем hostname:
```
hostname <name>
sudo vim /etc/hosts. (меняем вручную имя hosta)
```



<?php
$sectionTitle = [
  'title_2' => 'My Specialization',
  'sub_title_2' => '提供できるもの',
];
?>

<div id="my-specialization" class="w-46">
  <div class="mb-10">
    <p class="txt_en font-38 font-w-700" id="text-target"><?= $sectionTitle['title_2'] ?></p>
    <p><?= $sectionTitle['sub_title_2'] ?></p>
  </div>
  <div>
    <ul class="flex-r">

      <?php
      $skills = [
        [
          "id" => "skill-card_design",
          "icon" => "icon-design.svg",
          "titles" => ["Web Design", "UI/UX Design"],
          "count" => 13
        ],
        [
          "id" => "skill-card_develop",
          "icon" => "icon-development.svg",
          "titles" => ["Development"],
          "count" => 20
        ],
        [
          "id" => "skill-card_marketing",
          "icon" => "icon-marketing.svg",
          "titles" => ["SEO/", "Marketing"],
          "count" => 4
        ]
      ];
      ?>
      <?php foreach ($skills as $skill) : ?>
        <li id="<?= $skill['id'] ?>" class="card">
          <div class="flex-c center card-front">
            <div class="card-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?= $skill['icon'] ?>" alt="アイコン">
            </div>
            <div>
              <?php foreach ($skill['titles'] as $title) : ?>
                <p class="txt_en font-w-700"><?= $title ?></p>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="flex-c center card-inner">
            <p class="txt_en font-w-700 font-48"><?= $skill['count'] ?></p>
            <p class="txt_en font-w-700">Project</p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
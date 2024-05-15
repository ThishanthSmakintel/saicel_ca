<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingCoursesController_website extends Controller
{
    private $trainingData = [
        [
            'title' => 'House Cleaning Fundamentals',
            'description' => 'Learn the essential techniques and principles of house cleaning.',
            'category' => 'Housekeeping',
            'url' => 'https://alison.com/course/house-cleaning-fundamentals?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-house-cleaning.jpg',
        ],
        [
            'title' => 'Basics of Carpet Cleaning',
            'description' => 'Explore the foundational concepts of carpet cleaning.',
            'category' => 'Housekeeping',
            'url' => 'https://alison.com/course/basics-of-carpet-cleaning?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-carpet-cleaing.jpg',
        ],
        [
            'title' => 'Cleaning Steward Training',
            'description' => 'Training program for cleaning stewards focusing on best practices and safety measures.',
            'category' => 'Housekeeping',
            'url' => 'https://alison.com/course/cleaning-steward-training?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-traing-cleanig.jpg',
        ],
        [
            'title' => 'Healthcare Cleaning, Decontamination, and Waste Management',
            'description' => 'Learn about specialized cleaning techniques for healthcare environments.',
            'category' => 'Healthcare',
            'url' => 'https://alison.com/course/healthcare-cleaning-decontamination-and-waste-management?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-heathcare-work.jpg',
        ],
        [
            'title' => 'Training on Oven Cleaning',
            'description' => 'Comprehensive training on the proper methods for oven cleaning.',
            'category' => 'Housekeeping',
            'url' => 'https://alison.com/course/training-on-oven-cleaning?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-oven-cleaing.jpg',
        ],
        [
            'title' => 'Learn English: Phrasal Verbs for Cleaning and Chores',
            'description' => 'Improve your English language skills with a focus on cleaning-related phrasal verbs.',
            'category' => 'Language Learning',
            'url' => 'https://alison.com/course/learn-english-phrasal-verbs-for-cleaning-and-chores?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-english.jpg',
        ],
        [
            'title' => 'Setting Up a Cleaning Business',
            'description' => 'Guide to starting and managing a successful cleaning business.',
            'category' => 'Entrepreneurship',
            'url' => 'https://alison.com/course/setting-up-a-cleaning-business?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-cleaning-business.jpg',
        ],
        [
            'title' => 'Diploma in British Cleaning Certification Award (BCCA)',
            'description' => 'Comprehensive diploma program covering various aspects of cleaning with British certification.',
            'category' => 'Certification',
            'url' => 'https://alison.com/course/diploma-in-british-cleaning-certification-award-bcca?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-certficate.jpg',
        ],
        [
            'title' => 'Housekeeping Tasks and Procedures',
            'description' => 'Learn the tasks and procedures involved in professional housekeeping.',
            'category' => 'Housekeeping',
            'url' => 'https://alison.com/course/housekeeping-tasks-and-procedures?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-house-keeping.jpg',
        ],
        [
            'title' => 'Care of Young Children and Special Needs',
            'description' => 'Guide to caring for young children with special needs in a residential setting.',
            'category' => 'Childcare',
            'url' => 'https://alison.com/course/care-of-young-children-and-special-needs?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-childern-care.jpg',
        ],
        [
            'title' => 'Principles of Housekeeping',
            'description' => 'Explore the fundamental principles underlying professional housekeeping practices.',
            'category' => 'Housekeeping',
            'url' => 'https://alison.com/course/principles-of-housekeeping?utm_source=alison_user&utm_medium=affiliates&utm_campaign=23738873',
            'img' => 'images/training/card-img/img-house-cleaning.jpg',
        ]

    ];

    public function fetchTrainingData()
    {
        return view('training.training', ['courses' => $this->trainingData]);
    }
}

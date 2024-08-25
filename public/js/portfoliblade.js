<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>;

import { teamMembers } from "/js/teamdata.js";
import { portfolioItems } from "/js/portfolio.js";

$(document).ready(function () {
    const teamContainer = $("#teamContainer");
    const portfolioContainer = $("#portfolioContainer");

    teamMembers.forEach((member) => {
        const teamMemberDiv = `
                <div class="text-center">
                    <img src="${member.image}" alt="${member.name}" class="mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold">${member.name}</h3>
                    <p class="text-gray-500">${member.role}</p>
                </div>
            `;
        teamContainer.append(teamMemberDiv);
    });

    portfolioItems.forEach((item) => {
        const portfolioItemDiv = `
                <a href="${item.href}" class="bg-white shadow-md rounded-lg p-4">
                    <img src="${item.image}" alt="${item.alt}" class="rounded mb-4">
                    <h3 class="text-xl font-semibold text-blue-500">${item.title}</h3>
                    <p class="text-gray-700">${item.description}</p>
                </a>
            `;
        portfolioContainer.append(portfolioItemDiv);
    });
});
